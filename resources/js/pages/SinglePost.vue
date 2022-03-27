<template>
    <div class="container">
      <div class="post" v-for="post in posts" :key="post.slug">
          <h2>{{ post.title }}</h2>
          <div v-if="post.category" class="category">
              {{ post.category.name }}
          </div>
          <div class="tags">
              <ul>
                  <li v-for="tag in post.tags" :key="tag.id">
                      {{ tag.name }}
                  </li>
              </ul>
          </div>
          <p>{{ post.content }}</p>
          <router-link :to="{ name: 'single-post', param: { slug: posts.slug }}">Visualizza post</router-link>
      </div>
    </div>
</template>

<script>

export default {
    name: 'SinglePost',
}
</script>

<style lang="scss" scoped>

.container{
    display: flex;
    justify-content: center;
}

.post{
    border: 1px solid black;
    min-width: 150px;
    text-align: center;
}

.category{
    border: 1px solid red;
}

.tags{
    border: 1px solid blue;
}
</style>