<template>
  <h1>Lista de categorias:</h1>
  <TableComponent :thList="['ID','Categoria']" :tdList="categories"/>
</template>
  
  <script>
  import TableComponent from '../components/TableComponent.vue';
  import { ref } from 'vue';
  export default {
    name: 'CategoriesComponent',
    components: {
      TableComponent
    },
    setup() {
      // MOCK
      const categories = ref([
          { id: '1', name: 'Bebidas'},
          { id: '2', name: 'Informática'},
          { id: '3', name: 'Livro'}
      ]);

      return {
          categories
      };
    }
  }
  </script>