<template>
  <div id="nav">
    <router-link id="logo-url" to="/">
        <img id="logo" :src="logo" :alt="alt">
    </router-link>
    <router-link to="/categories">Categorias</router-link>
    <router-link to="/products">Produtos</router-link>
  </div>
</template>
  
  <script>
  export default {
    name: "NavbarComponent",
    props: ["logo", "alt"]
  }
  </script>
  
  <style scoped>
    #nav {
      background-color: #004c6d;
      border-bottom: 4px solid #111;
      padding: 15px 50px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }
    #nav #logo-url {
      margin: auto;
      margin-left: 0;
    }
    #logo {
      width: 40px;
      height: 40px;
    }
    #nav a {
      color: #fff;
      text-decoration: none;
      margin: 12px;
      transition: .5s;
    }
    #nav a:hover {
      color: #ccc;
    }
  </style>