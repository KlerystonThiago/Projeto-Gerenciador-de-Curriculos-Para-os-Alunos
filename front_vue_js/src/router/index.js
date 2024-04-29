import { createRouter, createWebHistory } from 'vue-router'
import CurriculoView from '../views/CurriculoView.vue'
import AdminView from '../views/AdminView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'curriculo',
      component: CurriculoView
    },
    {
      path: '/admin',
      name: 'admin',
      component: AdminView
    }
  ]
})

export default router
