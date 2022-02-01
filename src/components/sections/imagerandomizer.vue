<template>
  <div class="">
    <section>
      <header>
        <h1 class="test-headline">Test: Image Test</h1>
      </header>
      <div class="wrapper">
        <div class="image_wrapper">
          <h2 class="item-header">Prop Image</h2>
          <p>This image gets it's src attribute from a vue prop.</p>
          <img :src="src" width="300" height="300"
               alt="Oh no what happened?! Well, it appears that when using props in a Vue component, it somehow makes it no longer available. When the backend page refresh happens (roughly every 10 seconds) the prop no longer exists and the reactive change occurs, the data is undefined. See JSON Test below.">
        </div>

        <div class="image_wrapper">
          <h2 class="item-header">Non-Prop Image</h2>
          <p>This image gets it's src attribute from a vue data var.</p>
          <img :src="src2" width="300" height="300"/>
        </div>

      </div>
    </section>
    <section>
      <header>
        <h1 class="test-headline">Test: JSON Test</h1>
      </header>
      <div class="wrapper columns">
        <div class="column">
          <h2 class="item-header">On Load </h2>
          <pre><strong>this._props:</strong>{{ props1 }}</pre>
        </div>
        <div class="column">
          <h2 class="item-header">On fetch/xhr</h2>
          <pre><strong>this._props:</strong>{{ props2 }}</pre>
        </div>

      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "imagerandomizer",
  props: {
    src: String
  },
  data() {
    /*this.props1 = "";
    this.props2 = "";*/
    return {
      src2: "",
      props1: {},
      props2:{}
    }
  },
  created() {
    console.log(`Created`);
    this.load().then(response => {
      console.log(response);
      this.src = response.src;
      this.src2 = response.src2;
      console.log(this);
      this.props1 = JSON.stringify(this._props);
      this.checkPropsInTen();
    });
  },
  updated() {
    console.log('updated');
    console.log(`src: ${this._props.src}`);
  },
  methods: {
    checkPropsInTen: function(){
      setTimeout(()=>{
        this.props2 = JSON.stringify(this._props);
      }, 10500);
    }
  }
}
</script>
<style lang="scss" scoped>

section {
  border: 1px solid #000;
  border-radius: 5px;
  padding: 10px;

  & + section {
    margin-top: 10px;
  }
}

.test-headline {

}

.wrapper {
  display: flex;

  .image_wrapper {
    width: 300px;
    margin-right: 10px;

    img {
      width: 300px;
      height: 300px;
    }
  }

  &.columns{
    flex-direction: column;
  }
  .column{
    margin-top: 10px;

    .item-header{
      display:inline-block;
    }
  }
}

h2.item-header {
  margin-top:20px;
  margin-bottom: 10px;
  font-weight: bold;
  border-bottom: 1px solid black;
  font-size: 1.2rem;
}
p{
  margin-bottom:10px;
}
</style>
