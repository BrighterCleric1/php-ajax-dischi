<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

<?php
require_once __DIR__ . "/../database/database.php";
?>
    <header>
    <img src="" alt="">
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-5">
                <?php 
                    foreach ($database as $album) { ?>
                        <div class="col album">
                            <div class="inner">
                                <div class="album-img">
                                    <img src="<?php echo "{$album['poster']}"?>" alt="">
                                </div>
                                <div class="details">
                                    <div class="title"><?php echo $album['title'] ?></div>
                                    <div class="author"><?php echo $album['author'] ?></div>
                                    <div class="year"><?php echo $album['year'] ?></div>
                                </div>
                            </div>
                        </div>


                <?php  } ?>
            </div>
        </div>
    </main>
</body>

</html>