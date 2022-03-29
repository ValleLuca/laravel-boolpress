<template>
  <header>
    <nav>
      <span><router-link class="link" :to="{ name: 'home' }">HOME</router-link></span>
      <span><router-link class="link" :to="{ name: 'prodotti' }">PRODOTTI</router-link></span>
    </nav>
  </header>
</template>

<script>


export default {
  name: 'Header',

}
</script>

<style lang="scss" scoped>

nav{
  li{
    list-style: none;
  }
  .link{
    text-decoration: none;
    color: black;
    &:hover{
      color: blue;
    }
  }
}



</style>