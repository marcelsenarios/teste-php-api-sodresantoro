<template>
    <HeadTableComponent :label="label" :button="button" />
    <TableComponent :thList="headList" :tdList="products"/>
</template>
  
  <script>
  import TableComponent from '../components/TableComponent.vue';
  import HeadTableComponent from '../components/HeadTableComponent.vue';

  export default {
    name: 'ProductsComponent',
    components: {
      TableComponent,
      HeadTableComponent
    },

    data() {
      return {
        products: [],
        headList: ['ID','Categoria', 'Produto', 'Data cadastro', 'Data atualização'],
        label: "Lista de produtos",
        button: "Cadastrar"
      }
    },
    methods: {
      async getProducts() {
        const res = await fetch("http://127.0.0.1:8000/api/products");
        const finalRes = await res.json();
        this.products = finalRes;
      }
    },
    mounted() {
      this.getProducts()
    }
  }
  </script>