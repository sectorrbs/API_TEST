import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('./views/Index')
    },
    {
        path: '/admin',
        name: 'home',
        component: () => import('./views/Admin')
    },
]

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})


export default router
