import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: '/admin',
        name: 'admin.home',
        component: import("./views/pages/home/Home")
    },
    {
        path: '/admin/news',
        name: 'admin.news',
        component: import("./views/pages/news/News")
    },
    {
        path: '/admin/articles',
        name: 'admin.articles',
        component: import("./views/pages/articles/Articles")
    },
    {
        path: '/admin/catalog',
        name: 'admin.catalog',
        component: import("./views/pages/catalog/Catalog")
    },
    {
        path: '/admin/products',
        name: 'admin.products',
        component: import("./views/pages/products/Products")
    },
    {
        path: '/:pathMatch(.*)',
        component: import("./views/pages/404/NotFound")
    }
]

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})

export default router
