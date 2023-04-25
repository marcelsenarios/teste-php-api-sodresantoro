<template>
    <h1>Lista de produtos:</h1>
    <TableComponent :thList="['ID','Produto','Categoria']" :tdList="products"/>
</template>
  
  <script>
  import TableComponent from '../components/TableComponent.vue';
  import { ref } from 'vue';
  export default {
    name: 'ProductsComponent',
    components: {
      TableComponent
    },
    setup() {
      // MOCK
      const products = ref([
          { id: '1', name: 'Mochila', category_id: '2'},
          { id: '2', name: 'Notebook', category_id: '2'},
          { id: '3', name: 'Livro de PHP', category_id: '3'},
          { id: '4', name: 'Cerveja Bud', category_id: '1'},
          { id: '5', name: 'Vinho do Porto', category_id: '1'}
      ]);

      return {
          products
      };
  }
  }
  </script>