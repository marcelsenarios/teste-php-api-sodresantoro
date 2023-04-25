<template>  
  <NavbarComponent :logo="logo_src" :alt="app_name" />
  <div class="container">
    <router-view></router-view>
  </div>
  <FooterComponent />
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

/**Reset */

  html, body, div, span, applet, object, iframe,
  h1, h2, h3, h4, h5, h6, p, blockquote, pre,
  a, abbr, acronym, address, big, cite, code,
  del, dfn, em, img, ins, kbd, q, s, samp,
  small, strike, strong, sub, sup, tt, var,
  b, u, i, center,
  dl, dt, dd, ol, ul, li,
  fieldset, form, label, legend,
  table, caption, tbody, tfoot, thead, tr, th, td,
  article, aside, canvas, details, embed, 
  figure, figcaption, footer, header, hgroup, 
  menu, nav, output, ruby, section, summary,
  time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }
  /* HTML5 display-role reset for older browsers */
  article, aside, details, figcaption, figure, 
  footer, header, hgroup, menu, nav, section {
    display: block;
  }
  body {
    line-height: 1;
  }
  ol, ul {
    list-style: none;
  }
  blockquote, q {
    quotes: none;
  }
  blockquote:before, blockquote:after,
  q:before, q:after {
    content: '';
    content: none;
  }
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  /** */
  

  * {
    font-family: Verdana, Geneva, Tahoma, sans-serif;  
  }
  .container {
    width: 100%;
    min-width: 400px;
    max-width: 1400px;
    border-collapse: collapse;
    margin: 0 auto;
    height: calc(100vh - 173px);
  }
  h1 {
    font-size: 2rem;
    color: #333;
  }
</style>