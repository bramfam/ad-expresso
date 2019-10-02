<template>
<nav style="height:70.1px;" class="navbar navbar-expand-lg navbar-light bg-dark text-white">
	<a class="navbar-brand text-white text-2xl" style="font-size : 30px; " href="#">AdXpress</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>	
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav text-white">
			<li class="nav-item active text-secondary">
				<a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="/logout">Logout</a>
			</li>
		</ul>
	</div>
</nav>
</template>

<script>
export default {
	// components : {  },
	props : ['user'],
	name: 'AppNav',
	data () {
		return {
			items : "",
			// user : this.user
		}
	},

	computed : { 
		fullName(){ 
			return user.first_name + user.last_name;
		}
	},
	methods : { 
		redirect_to_logout(){
		
		}
	}
};
</script>

<style lang="css" scoped>
</style>