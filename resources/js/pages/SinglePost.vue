<template>
    <div class="container">
        <h1>{{post.title}}</h1>
        <div v-html="post.content"></div>
        <p v-if="post.category"><strong>Categoria:</strong> {{ post.category.name }} </p>
        <div> 
            <strong>Tags</strong>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id">
                    {{ tag.name }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

export default {
    name: 'SinglePost',
      data() {
        return {
            post: {},
        };
    },
    created() {
        axios.get(`/api/posts/${this.$route.params.slug}`).then((response) => {
            this.post = response.data;
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
}

.category{
    border: 1px solid red;
}

.tags{
    border: 1px solid blue;
}
</style>