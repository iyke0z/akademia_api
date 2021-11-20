import VueRouter from "vue-router"
import Login from './components/Authentication/Login.vue'
import SchoolRegister from './components/Authentication/SchoolRegister.vue'
import Dashboard from './components/Dashboard.vue'
import NavBar from './components/NavBar.vue'

let routes = [
    { path: '/register', component:SchoolRegister, name:'SchoolRegister'},
    { path: '/', component:Login, name:'login'},
    {
        path: '/dashboard',
        component: Dashboard,
        name:'Dashboard',
        beforeEnter: (to, from, next) => {
            axios.get('api/authenticated').then(()=>{
                next()
            }).catch(()=>{
                return next({name: 'login'})
            })
        }
    },
    { path: '/nav', component: NavBar, name:'NavBar'},

]

const router = new VueRouter({
    routes: routes,
    mode: "history",
})

export default router
