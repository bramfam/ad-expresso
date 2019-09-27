<template>
	<modal name="login">
		<form @submit.prevent="showLoginForm" class="bg-white p-4">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" v-model="form.email" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" v-model="form.password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember my password</label>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Submit</button>
		</form>
	</modal>
</template>

<script>
export default {
	name: 'LoginModal',
	data () {
		return {
			form : {
				pin : "",
				password : ""
			}
		}
	},
	methods : {
		showLoginForm(){
			axios.post("/login",this.form)
				.then(response => {
					console.log(response);
				}).catch(error => {
					console.log(error);
				});
		}
	}
};
</script>

<style lang="css" scoped>
</style>