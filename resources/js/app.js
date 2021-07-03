require('./bootstrap');

import Vue from 'vue'

Vue.component('main-header', require('./components/Header.vue').default);
Vue.component('list-product', require('./components/List.vue').default);
Vue.component('detail-product', require('./components/Detail.vue').default);

const app = new Vue({
    el: '#app',
});

