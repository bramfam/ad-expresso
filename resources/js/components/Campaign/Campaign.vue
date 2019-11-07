<template>
	<div class="container">
		<dashboard-nav></dashboard-nav>
		<ul>
			<li v-for="campaign in campaign">
				<div class="media" >
					<img src="" class="mr-3" alt="">
					<div class="media-body">
						<h5 class="mt-0" v-text="campaign.name"></h5>
						This is just a gibberish text not dynamic stuff. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi, adipisci animi dolore reprehenderit saepe, totam maxime ipsum quas sint?
					</div>
				</div>
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
		}
	}
};
</script>

<style lang="css" scoped>
#app {	
	@apply .bg-white
}
</style>