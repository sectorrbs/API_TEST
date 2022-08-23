<template>
    <router-link :to="{name: 'admin.home'}" class="nav__link">Главная</router-link>
    <router-link :to="{name: 'admin.news'}" class="nav__link">Новости</router-link>
    <router-link :to="{name: 'admin.articles'}" class="nav__link">Статьи</router-link>
    <router-link :to="{name: 'admin.catalog'}" class="nav__link">Каталог</router-link>
    <router-link :to="{name: 'admin.products'}" class="nav__link">Продукты</router-link>
</template>

<script>

export default {
    name: "Nav",
    components: {}
}

</script>
