<template>
  <div id="app">
    <Header @selectInput="searchAlbumInput" @selectGenre="searchAlbumsGenre" />
    <Main :albums="filteredGenres" />
  </div>
</template>

<script>
import axios from "axios";
import Header from "./components/Header.vue";
import Main from "./components/Main.vue";

export default {
  name: "App",
  components: {
    Main,
    Header,
  },
  data: function () {
    return {
      albums: [],
      inputSelectGenre: "",
      inputSelect: "",
    };
  },
  created() {
    axios
      .get(
        "http://localhost/repo-boolean-php/php-ajax-dischi/bonus-vue/src/backend/api.php"
      )
      .then((result) => {
        this.albums = result.data;
      });
  },
  computed: {
    filteredGenres() {
      if (this.inputSelectGenre.length === 0 && this.inputSelect === "") {
        return this.albums;
      } else if (this.inputSelectGenre === "null") {
        return this.albums;
      }

      return this.albums.filter((element) => {
        return (
          element.genre
            .toLowerCase()
            .includes(this.inputSelectGenre.toLowerCase()) &&
          element.title.toLowerCase().includes(this.inputSelect.toLowerCase())
        );
      });
    },
  },
  methods: {
    searchAlbumsGenre: function (selectStringGenre) {
      this.inputSelectGenre = selectStringGenre.trim();
    },
    searchAlbumInput: function (inputString) {
      this.inputSelect = inputString.trim();
    },
  },
};
</script>

<style lang="scss">
</style>
