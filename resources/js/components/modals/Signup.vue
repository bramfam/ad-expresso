<template>
	<modal name="signup" height="auto" width="50%" :adaptive="modalAdapt">
		<div class="bg-white p-4">
			<form @submit.prevent="">
				<div class="input-group"></div>
			</form>
		</div>
	</modal>
</template>
<script>
export default {

	name: 'Signup',	

	data () {
		return {
			modalAdapt : true , 
			form : {
				first_name : ""
			}
		}
	}
};
</script>

<style lang="css" scoped>
</style>