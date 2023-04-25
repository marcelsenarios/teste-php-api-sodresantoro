<template>
  <table class="table">
      <thead>
          <tr>
              <th v-for="th in thList" :key="th">{{ th }}</th>
          </tr>
      </thead>
      <tbody>
          <tr v-for="td in tdList" :key="td.id">
              <td v-for="item in td" :key="td.id+item">{{ item }}</td>
          </tr>
      </tbody>      
  </table>
</template>

<script>
// import { ref } from 'vue';

export default {
  name: 'TableComponent',
    props: ['thList', 'tdList'],
  // data() {
  //   return {
  //     products: null
  //   }
  // },
  // methods: {
  //   async getProducts() {
  //     alert('teste')
  //     const req = await fetch('http://127.0.0.1:8000/api/products')
  //     console.log("[Marcel] req ", req)
  //     const data = await req.json()
  //     console.log("[Marcel] data ", data)
  //     this.products = data
  //   },
  //   mounted () {
  //     this.getProducts()
  //   },
  // }

//   setup() {
//       // MOCK
//       const products = ref([
//           { id: '1', name: 'Mochila', category_id: '10'},
//           { id: '2', name: 'Notebook', category_id: '8'},
//           { id: '3', name: 'Livro de PHP', category_id: '3'},
//           { id: '4', name: 'Cerveja Bud', category_id: '1'},
//           { id: '5', name: 'Vinho do Porto', category_id: '1'}
//       ]);

//       return {
//           products
//       };
//   }
}
</script>

<style scoped>
    .table {
        width: 100%;
        min-width: 400px;
        max-width: 1400px;
        border-collapse: collapse;
        margin: 25px auto;
        font-size: 0.9em;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .table thead tr {
        background-color: #333333;
        color: #ffffff;
        text-align: left;
    }   
    
    .table th, .table td {
        padding: 10px;
        text-align: left;
    }   

    .table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .table tbody tr:last-of-type {
        border-bottom: 2px solid #333333;
    }

    .table tbody tr.active-row {
        font-weight: bold;
        color: #333333;
    }
</style>