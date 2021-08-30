<template>
  <header>
    <div class="selectForGenres">
      <label for="genres">Scegli un genere:</label>
      <select
        @change="$emit('selectGenre', selectStringGenre)"
        v-model="selectStringGenre"
        name="genres"
        id="genres"
      >
        <option value="null">-</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
      </select>
    </div>
    <div>
      <input
        @keyup="$emit('selectInput', inputString)"
        v-model="inputString"
        placeholder="Cerca per titolo, autore o anno"
        type="text"
        name=""
        id=""
      />
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      selectStringGenre: "",
      inputString: "",
    };
  },
};
</script>

<style lang="scss" scoped>
header {
  height: 100px;
  background-color: #2e3a46;
}
</style>