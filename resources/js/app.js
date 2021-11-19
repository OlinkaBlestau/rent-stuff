/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue').default;


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import 'material-icons/iconfont/material-icons.css';

//defined as global component
Vue.component('main-page', require('./components/Main.vue').default);
Vue.component('landlord-page', require('./components/landLord.vue').default);
Vue.component('V-MaterialIcon', require('vue-materials-icon/MaterialIcon').default);
Vue.component('tenant-page', require('./components/Tenant.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('create-ad', require('./components/CreateAd.vue').default);
Vue.component('profile-landlord', require('./components/ViewProfileLandlord.vue').default);
Vue.component('edit-landlord', require('./components/EditProfileLandlord.vue').default);
Vue.component('support', require('./components/Support.vue').default);
Vue.component('profile-tenant', require('./components/ViewProfileTenant.vue').default);
Vue.component('view-ad', require('./components/ViewAd.vue').default);
Vue.component('edit-ad', require('./components/EditAd.vue').default);
Vue.component('profile', require('./components/Profile.vue').default);

Vue.component('sign-up', require('./components/SignUp.vue').default);
Vue.component('sign-in', require('./components/SignIn.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

const navbar = new Vue({
    el: '#navbar',
})
