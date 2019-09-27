
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import { Form, HasError, AlertError } from 'vform';




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('card-component', require('./components/CardComponent.vue'));
Vue.component('category-component', require('./components/Category.vue'));



window.Form = Form;

const app = new Vue({
    el: '#app'
});
