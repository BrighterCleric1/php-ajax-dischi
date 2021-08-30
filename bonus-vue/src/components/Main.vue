<template>
  <main>
    <div class="container">
      <div class="row row-cols-5">
        <Album
          class="col"
          v-for="(album, index) in albums"
          :key="index"
          :album="album"
        />
      </div>
    </div>
  </main>
</template>

<script>
import Album from "./Album.vue";
export default {
  name: "Main",
  components: {
    Album,
  },
  props: {
    albums: Array,
  },
};
</script>

<style lang="scss" scoped>
main {
  height: 100%;
  background: #1e2d3b;
  padding-top: 100px;
}
</style>