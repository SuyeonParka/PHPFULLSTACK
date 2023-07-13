require('./bootstrap');

import { createApp } from 'vue';
import App from './vue/App.vue';

// app인 곳에 mount하겠다는 의미
createApp(App).mount('#app');