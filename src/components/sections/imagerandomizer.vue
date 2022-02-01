<template>
  <div class="fqsr">
    <h2 class="k-headline">Images</h2>
    <div class="images_wrapper">

      <div class="image_wrapper">
        <h2 class="item-header">Prop Image</h2>
        <img :src="src" width="300" height="300"
             alt="Oh no what happened?! Well, it appears that when using props in a Vue component, it somehow makes it no longer available. When the backend page refresh happens (roughly every 10 seconds) the prop no longer exists and the reactive change occurs, the data is undefined." >
      </div>

      <div class="image_wrapper">
        <h2 class="item-header">Non-Prop Image</h2>
        <img :src="src2" width="300" height="300"/>
      </div>

    </div>
  </div>
</template>
<script>
export default {
  name: "imagerandomizer",
  props: {
    src: String
  },
  data() {
    return {
      src2: ""
    }
  },
  created() {
    console.log(`Created`);
    this.load().then(response => {
      console.log(response);
      this.src = response.src;
      this.src2 = response.src2;
      console.log(this);
    });
  },
  updated() {
    console.log('updated');
    console.log(`src: ${this._props.src}`);
  }
}
</script>
<style lang="scss" scoped>
.images_wrapper {
  display: flex;

  .image_wrapper {
    width: 300px;
    margin-right: 10px;

    img{
      width: 300px;
      height: 300px;
    }
  }
}

h2.item-header{
  font-weight: bold;
  border-bottom: 1px solid black;
}
</style>
