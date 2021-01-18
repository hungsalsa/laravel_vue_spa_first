import Vue from 'vue'
import Router from 'vue-router'
import Welcome from './views/Welcome.vue'
import category from './views/category/Index.vue'
import UserIndex from './views/user/Index.vue'

Vue.use(Router)

const routes = [
    {
        path: '',
        name: 'welcome',
        component: Welcome
    },{
        path: '/category',
        name: 'category',
        component: category
    },
    {
        path: '/product',
        name: 'product',
        component: category
    },
    {
        path: '/user',
        name: 'user',
        component: UserIndex
    }
]

export default new Router({
    // mode: 'history',
    routes
})