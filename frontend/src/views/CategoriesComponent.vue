<template>
  <HeadTableComponent :label="label" :button="button" />
  <TableComponent :thList="headList" :tdList="categories"/>
</template>
  
  <script>
  import TableComponent from '../components/TableComponent.vue';
  import HeadTableComponent from '../components/HeadTableComponent.vue';

  export default {
    name: 'CategoriesComponent',
    components: {
      TableComponent,
      HeadTableComponent
    },

    data() {
      return {
        categories: [],
        headList: ['ID','Categoria', 'Data cadastro', 'Data atualização'],
        label: "Lista de categorias",
        button: "Cadastrar"        
      }
    },
    methods: {
      async getCategories() {
        const res = await fetch("http://127.0.0.1:8000/api/categories");
        const finalRes = await res.json();
        this.categories = finalRes;
      }
    },
    mounted() {
      this.getCategories()
    }
  }
  </script>