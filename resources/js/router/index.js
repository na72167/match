import Vue from 'vue'
import VueRouter from 'vue-router'
import { authorize } from './guard';

import Top from '../pages/Top.vue'
import SignUp from '../pages/SignUp.vue'
import Login from '../pages/Login.vue'
import PasswordChange from '../pages/passwordChange.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Top,
    beforeEnter: authorize,
  },
  {
    path: '/signUp',
    component: SignUp,
    beforeEnter: authorize,
  },
  {
    path: '/login',
    component: Login,
    beforeEnter: authorize,
  },
  {
    path: '/passwordChange',
    component: PasswordChange,
    beforeEnter: authorize,
  }
]

const router = new VueRouter({
  routes
})

export default router