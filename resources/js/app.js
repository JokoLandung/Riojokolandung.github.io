import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import axios from 'axios';
import VueAxios from 'vue-axios';
import { routes } from './routes';
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import { faPencil, faTrash } from '@fortawesome/free-solid-svg-icons';

library.add(faPencil, faTrash);

const router = createRouter({
    routes,
    history: createWebHistory()
});

const app = createApp(App);
app.use(VueAxios, axios);
app.use(router);
app.component('font-awesome-icon', FontAwesomeIcon);
app.mount('#app');

// Vue.use(VueRouter);