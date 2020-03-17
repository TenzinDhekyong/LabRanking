import Vue from 'vue';
import VueRouter from 'vue-router'

// auth

// Components
import HomeComponent from './components/HomeComponent'
import OverallComponent from './components/OverallComponent'
import EyrcComponent from './components/EyrcComponent'
// Routes

Vue.use(VueRouter)

export const router = new VueRouter({
  mode: 'history',
  linkExactActiveClass: 'is-clicked',
routes: [
    {
        //public
          path: '/',
          name: 'home',
          component : HomeComponent,
          
      },
      {
        //public
          path: '/overall',
          name: 'overall',
          component : OverallComponent,
          
      },
      {
        //public
          path: '/eyrc',
          name: 'eyrc',
          component : EyrcComponent,
          
      },
     
]})

