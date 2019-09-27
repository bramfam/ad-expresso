/*
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

import VoerroTagsInput from '@voerro/vue-tagsinput';

var Turbolinks = require('turbolinks');

Turbolinks.start();

window.Vue = require('vue');

window.$ = require('jquery');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
Vue.component('app-nav',require('./components/Pages/AppNav.vue').default);
Vue.component('landing-page',require('./components/Pages/LandingPage.vue').default);
Vue.component('campaign-view', require('./components/Campaign/Campaign.vue').default);
Vue.component('dashboard-nav', require('./components/DashboardNav.vue').default);
Vue.component('login-modal',require('./components/Pages/Login.vue').default);
Vue.component('login',require('./components/modals/Login.vue').default);
Vue.component('signup',require('./components/modals/Signup.vue').default);
Vue.component('new-campaign', require('./components/Campaign/NewCampaign.vue').default);
Vue.component('campaign-steps', require('./components/CampaignSteps.vue').default);
Vue.component('ad-accounts', require('./components/AdAccounts.vue').default);
Vue.component('tags-input', VoerroTagsInput);
/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

const app = new Vue({
	el: '#app',
	components: { "v-tags-input": VoerroTagsInput },
});


/*
Vue.mixin({
    methods: {
        route: route
    }
});
*/


/*
export default new Vuex.store({
	
});
*/
