import Vue from 'vue'
import App from './App.vue'
import VueUsers from "./components/VueUsers";


Vue.config.productionTip = false
Vue.component('vue-users', VueUsers);

new Vue({
	render: function (h) { return h(App) }
}).$mount('#app')
