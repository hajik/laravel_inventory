require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/temp_admin/ExampleComponents').default)

const app = new Vue({
    el: '#app'
});
