require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('home', require('./components/home/Home.vue').default);
const app = new Vue({
    el: '#app',
});

