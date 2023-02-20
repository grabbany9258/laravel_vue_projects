<template>
  {{ itemCount }}
</template>

<script>
export default {
  data() {
    return {
      itemCount: "",
    };
  },
  methods: {
    async get_cart_items() {
      await axios.post("/cart").then(function (response) {
        this.itemCount = response.data.items;
      });
    },
  },
  created() {
    this.get_cart_items();
  },
};
</script>

<style>
</style>