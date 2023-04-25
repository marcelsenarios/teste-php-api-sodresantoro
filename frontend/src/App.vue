<template>
  <div>
    <NavbarComponent :logo="logo_src" :alt="app_name" />
    <div class="container">
      <router-view></router-view>
    </div>
    <FooterComponent />
  </div>
</template>
<script>
import NavbarComponent from './components/NavbarComponent'
import FooterComponent from './components/FooterComponent'
export default {
  data: function() {
    return {
      logo_src: "/img/logo.png",
      app_name: "Sodre Santoro"
    }
  },
  components: {
    NavbarComponent,
    FooterComponent
  }
}
</script>

<style>
  * {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  .container {
    margin: 50px;
    min-height: 250px;
    height: calc(100vh - 150px);
  }
  h1 {
    text-align: center;
    font-size: 42px;
    margin-bottom: 30px;
    color: #333;
  }
</style>