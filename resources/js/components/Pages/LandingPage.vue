<template>	
	<div class="jumbotron bg-gray-dark">
		<h1 class="display-4">Welcome to the best ad-manager</h1>
		<p class="lead">manage and deploy your ads efficiently and fast
		</p>
		<hr class="my-4">
		<!-- show only if theres no logged on user -->
		<div v-show="if_no_logged_user">
			<a href="/register" class="p-3 btn btn-primary btn-lg" role="button">Create a free account now
			</a>
			<a @click="showLoginModal" class="p-3 btn btn-success text-white btn-lg" role="button">Login to your account
			</a>
		</div>

		<div v-if="!if_no_logged_user">
			<a href="/register" class="p-3 btn btn-primary btn-lg" role="button">Go to your homepage.
			</a>
		</div>
	
		<login></login>
		<signup></signup>
	</div>
</template>
<script>
import Login from '../modals/Login.vue';
import Signup from '../modals/Signup.vue';
export default { 
	components : { Login, Signup },
	props : ['user'],
	data(){
		return  {
			user : this.user
		}
	},
	methods: { 
		showLoginModal(){
			// if he is not signed in
			if (window.Ads.signedIn = false){
				console.log('not signed in');
			}
			else { 
				this.$modal.show('login');
			}
		}
	}	
};
</script>