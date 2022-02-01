<template>
  <div>
    <k-header>{{ title }}</k-header>
    <ul>
      <li v-for="(todo, index) in todos" :key="index">
        {{ todo }}
      </li>
    </ul>
  </div>

</template>

<script>
export default {
  name:"k-todo-section",
  props: {
    title: String,
    todos: Array
  },
  created(){
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