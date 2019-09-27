<template>
	<div class="container">
		<dashboard-nav></dashboard-nav>
		<ul>
			<li v-for="campaign in campaign">
				<h5 class="mt-0 mb-1" v-text="campaign.name"></h5>
			</li>
		</ul>
	</div>
</template>
<script>
// import api from '.././scripts/api.js';
export default {
	props : ['campaign'],
	name: 'Campaign',
	data () {
		return {

		}
	},
	computed : {
		endpoint(){
			return route('campaign.store') ; 
		}
	},
	methods : { 
		fetchCampaigns(){
			axios.get(this.endpoint)
			.then(response => this.campaigns = response.data)
			.catch(error => console.log(error));
		},
		
	}
};
</script>

<style lang="css" scoped>
#app {	
	@apply .bg-white
}
</style>