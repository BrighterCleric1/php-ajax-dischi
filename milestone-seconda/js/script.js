Vue.config.devtools = true;

new Vue(
    {
        el: '#app',
        data: {
            discs: []
        },
        created() {
            axios.get("http://localhost/repo-boolean-php/php-ajax-dischi/api/api.php")
                .then((response) => {
                    console.log(response)
                })
        }
    }
)