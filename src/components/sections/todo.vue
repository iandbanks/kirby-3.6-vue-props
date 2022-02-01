<template>
  <section>
    <header>
      <h1 class="test-headline">Test: Todos</h1>
      <p>Todo's as a section vue plugin will disappear, whereas todos as a <a href="/panel/todos">fiber/area/view vue plugin</a> will persist.</p>
    </header>
    <div>

      <k-header>{{ title }}</k-header>
      <ul>
        <li v-for="(todo, index) in todos" :key="index">
          {{ todo }}
        </li>
      </ul>
    </div>
  </section>

</template>

<script>
export default {
  name: "k-todo-section",
  props: {
    title: String,
    todos: Array
  },
  created() {
    console.log('This worked');
    this.load().then(response => {
      console.log(response);
      console.log(this);
      this.title = response.title;
      this.todos = response.todos;
    });
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

  &.columns {
    flex-direction: column;
  }

  .column {
    margin-top: 10px;

    .item-header {
      display: inline-block;
    }
  }
}

h2.item-header {
  margin-top: 20px;
  margin-bottom: 10px;
  font-weight: bold;
  border-bottom: 1px solid black;
  font-size: 1.2rem;
}

p {
  margin-bottom: 10px;
}

a{
  color:blue;
}
</style>