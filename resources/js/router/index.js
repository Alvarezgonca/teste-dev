import { createRouter, createWebHistory } from 'vue-router';
import IndexPage from '../pages/index.vue';
import CreatePage from '../pages/create.vue';

const routes = [
  { path: '/', component: IndexPage },
  { path: '/create', component: CreatePage },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
