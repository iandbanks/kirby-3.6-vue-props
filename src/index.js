import imagerandomizer from './components/sections/imagerandomizer';
import todosection from './components/sections/todo';
import todos from './components/view/todo';

panel.plugin("iandbanks/imagerandomizer", {
  sections:
    {
      "imagerandomizer": imagerandomizer,
      "todos": todosection
    }
});

panel.plugin("iandbanks/todos", {
  components: {
    'k-todo-view': todos
  }
});
