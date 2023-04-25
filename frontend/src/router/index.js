import { createRouter, createWebHistory } from 'vue-router'
import HomeComponent from '../views/HomeComponent.vue'

const routes = [
  {
    path: '/',
    name: 'HomeComponent',
    component: HomeComponent
  },
  {
    path: '/categories',
    name: 'CategoriesComponent',
    component: () => import('../views/CategoriesComponent.vue')
  },
  {
    path: '/products',
    name: 'ProductsComponent',

    component: () => import('../views/ProductsComponent.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router