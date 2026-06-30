import {createRouter, createWebHistory} from 'vue-router'
import Home from './components/pages/Home.vue'
import CreatePage from './components/pages/CreatePage.vue'
import UpdatePage from './components/pages/UpdatePage.vue'

const routes = [
    {name: 'Home', component: Home, path: '/'},
    {name: 'CreatePage', component: CreatePage, path: '/create'},
    {name: 'UpdatePage', component: UpdatePage, path: '/update/:id'}
]

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;