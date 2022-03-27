<template>
  <header>
    <nav>
      <li><router-link :to="{ name: 'home' }">HOME</router-link></li>
      <li><router-link :to="{ name: 'prodotti' }">PRODOTTI</router-link></li>
    </nav>
  </header>
</template>

<script>


export default {
  name: 'Header',

}
</script>

<style lang="scss">

</style>