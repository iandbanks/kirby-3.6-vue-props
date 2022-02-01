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
  name:"k-todo-view",
  props: {
    title: String,
    todos: Array
  },
  created(){
    console.log('This worked');
  }
}
</script>