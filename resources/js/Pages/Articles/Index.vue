<template>
    <div class="articles-container">
        <h1>Articles</h1>
        <input v-model="localQuery" @keyup.enter="search" placeholder="Search title or content" />
        <div v-for="article in articles" :key="article.id" class="article-item">
            <h2>{{ article.title }}</h2>
            <p class="article-content">• {{ article.content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        articles: Array,
        query: String,
    },
    data() {
        return {
            localQuery: this.query,
        };
    },
    methods: {
        search() {
            this.$inertia.get('/', { query: this.localQuery });
        },
    },
    watch: {
        query(newQuery) {
            this.localQuery = newQuery;
        },
    },
};
</script>

<style scoped>
.articles-container {
    text-align: center;
}

.article-item {
    margin: 10px 0;
}

.article-content {
    text-align: justify;
    max-width: 400px;
    margin: 0 auto;
}
</style>
