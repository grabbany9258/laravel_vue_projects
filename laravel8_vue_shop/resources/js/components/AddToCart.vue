<template>
  <button class="btn btn-danger btn-block" @click="addProductToCart()">
    Add to Cart
  </button>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      quantity: 0,
    };
  },
  props: ["userId", "productId"],
  methods: {
    async addProductToCart() {
      // Checking if user logged in.
      //   if (this.userId == 0) {
      //     alert("You need to login, To add this product in cart");
      //return;
      //   }
      let response = await axios
        .post("/cart", {
          product_id: this.productId,
        })
        .then(function (res) {
          console.log(res.data);
        });
      //   alert(this.productId);
    },
  },
};
</script>

<style>
</style>