<template>
    <div>
      <div class="main-container">
        <h1>Produtos:</h1>
        <TableComponent />
      </div>
    </div>
  </template>
  
  <script>
  import TableComponent from '../components/TableComponent.vue'
  export default {
    name: 'ProductsComponent',
    components: {
      TableComponent
    }
  }
  </script>