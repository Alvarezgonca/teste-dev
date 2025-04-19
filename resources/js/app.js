import './bootstrap';
import { createApp } from 'vue';

import HeaderComponent from './Components/HeaderComponent.vue';
import FooterComponent from './Components/FooterComponent.vue';

const app = createApp({});

app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);

app.mount('#app');

