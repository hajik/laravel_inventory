require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/temp_admin/ExampleComponents').default)
Vue.component('product-add', require('./components/temp_admin/products/ProductAdd').default)
 
import store from './components/temp_admin/store'

const app = new Vue({
    el: '#app',
    store
});
