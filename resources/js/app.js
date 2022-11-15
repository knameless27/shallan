require('./bootstrap');
import 'bootstrap/dist/css/bootstrap.css';

import { createApp } from "vue";

createApp({})
.component("otravez", require('./components/otravez.vue').default).mount("#app");
