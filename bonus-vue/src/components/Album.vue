<template>
  <div class="album">
    <div class="inner">
      <div class="album-img">
        <img :src="album.poster" alt="pic" />
      </div>
      <div class="details">
        <div class="title">{{ album.title }}</div>
        <div class="author">{{ album.author }}</div>
        <div class="year">{{ album.year }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Album",
  props: {
    album: Object,
  },
};
</script>

<style lang="scss" scoped>
.album {
  height: 400px;

  .inner {
    height: 90%;
    background-color: #2e3a46;
    padding: 35px;
    .album-img {
      img {
        width: 100%;
      }
    }
    .details {
      margin-top: 20px;
      text-align: center;
      .title {
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
      }
      .author,
      .year {
        color: #777268;
      }
    }
  }
}
</style>