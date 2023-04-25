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
}
</script>

<style scoped>

    .table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.9em;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .table thead tr {
        background-color: #004c6d;
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