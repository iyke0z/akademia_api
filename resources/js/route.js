import VueRouter from "vue-router"
import Login from './components/Authentication/Login.vue'
import SchoolRegister from './components/Authentication/SchoolRegister.vue'

let routes = [
    { path: '/school-registration', component:SchoolRegister},
    { path: '/', component:Login},
]

const router = new VueRouter({
    routes: routes,
    mode: "history",
})

export default router
