<template>
	<modal name="link-facebook" :adaptive="adaptStatus">
		<form @submit.prevent="link_facebook" class="p-4 h-full">
			<div class="form-group mb-1">
				<h3>Enter your facebook credentials : </h3>
			</div>
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Username / Email:</label>
				<input type="text" class="form-control" id="recipient-name">
			</div>
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Password:</label>
				<input type="password" class="form-control" id="recipient-name">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block">Connect Facebook</button>
			</div>
		</form>
	</modal>
</template>

<script>
export default { 
	data(){
		return { 
			adaptStatus : true
		}
	},
	methods : { 
		link_facebook(){
			axios.post(this.endpoint)
				 .then(response => {
				 	console.log(response);
				 }).catch(error => {
				 	console.log(error);
				 })
		}
	},
	computed : { 
		endpoint(){
			return route('posts.store');
		}
	}
};
</script>