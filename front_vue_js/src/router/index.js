import { createRouter, createWebHistory } from 'vue-router'
import CurriculoView from '../views/CurriculoView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'curriculo',
      component: CurriculoView
    }
  ]
})

export default router
