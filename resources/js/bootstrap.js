window._ = require('lodash');

import axios from 'axios';
import Vue from 'vue' ;

// import VueRouter from 'vue-router';

import moment from 'moment' ; 
import VModal from 'vue-js-modal';
import VeeValidate from 'vee-validate' ;
window.Vue = Vue ;
window.axios = axios ;	
window.axios.defaults.headers.common = {
	'X-Requested-With': 'XMLHttpRequest'
};

let user = window.Ads.user ; 

// route();


Vue.use(VModal);
Vue.use(VeeValidate);
// Vue.use(VueRouter);


// Vue.use(InstantSearch);

const options = {
	confirmButtonColor: '#60B37A',
	cancelButtonColor: '#ff7674'
}

// Vue.use(VueSweetalert2, options);

Vue.config.devtools = true ; 
Vue.config.performance  = true ; 

// Vue.prototype.$user = window.App.user;

/*
import Echo from "laravel-echo" ;

window.Echo = new Echo({
	broadcaster: 'pusher',
	key: '1232b570ab3e504b5e9d',
	cluster : 'ap1',
	encrypted : true
});
*/

// Vue.use(Vuetify)