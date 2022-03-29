<template>
    <div class="container">
      <div class="post" v-for="post in posts" :key="post.slug">
          <h2>{{ post.title }}</h2>
          <div v-if="post.category" >
              <span class="category">CATEGORIA:</span> {{ post.category ? post.category.type : 'null' }}
          </div>
          <div class="tags">
              <ul>
                  <p>TAG:</p>
                  <li v-for="tag in post.tags" :key="tag.slug">
                      {{ tag.name }}
                  </li>
              </ul>
          </div>
          <p>{{ post.content }}</p>
          <router-link :to="{ name: 'single-post', params: { slug: post.slug }}" class="link_option">visualizza post</router-link>
      </div>
    </div>
</template>

<script>


export default {
  name: 'Post',
  data() {
        return {
            posts: [],
        };
    },
    created() {
        axios.get('/api/posts').then((response) => {
            this.posts = response.data;
        });
    },
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
    padding-bottom: 10px;
}

.category{
    color: rgb(13, 202, 240);
}

.tags{
    p{
        color: red;
    }

    ul{
        padding: 0px;
    }
    li{
        list-style: none;
    }
}

.link_option{
     text-decoration: none;
     color: blue;
      &:hover{
      color: red;
    }
}

</style>