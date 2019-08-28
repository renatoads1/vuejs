
require('./bootstrap');

window.Vue = require('vue');
Vue.component('botao', require('./components/Botao.vue').default);
Vue.component('panel', require('./components/Panel.vue').default);
Vue.component('tabela', require('./components/Tabela.vue').default);
const app = new Vue({
    el: '#app',
});
