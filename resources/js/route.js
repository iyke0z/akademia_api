import VueRouter from "vue-router"
import Login from './components/Authentication/Login.vue'
import SchoolRegister from './components/Authentication/SchoolRegister.vue'
import SchoolDashboard from './components/school/Dashboard.vue'
import NavBar from './components/NavBar.vue'

let routes = [
    { path: '/school-registration', component:SchoolRegister, name:'SchoolRegister'},
    { path: '/', component:Login, name:'login'},
    { path: '/dashboard', component: SchoolDashboard, name:'SchoolDashboard'},
    { path: '/nav', component: NavBar, name:'NavBar'}
]

const router = new VueRouter({
    routes: routes,
    mode: "history",
})

export default router
