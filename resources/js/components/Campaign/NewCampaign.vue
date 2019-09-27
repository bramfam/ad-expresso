<template>
	<div>
		<form class="bg-black p-4 w-1/2" v-if="user_has_linked_a_social_ccount">
			<h5>New Campaign:</h5>
			<div class="form-group">
				<label for="exampleInputEmail1">Campaign Title : </label>
				<input type="text" class="form-control p-2" placeholder="Bloody Friday Sale">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Billing Account Name:  </label>
				<select v-model="form.billing_account_name" class="form-control" id="exampleFormControlSelect1">
					<option>Billing Account Name</option>
				</select>
			</div>

			<div class="form-group p-2">
				<label for="exampleInputEmail1">Tags :(Press Enter each time)</label>
				<tags-input element-id="tags"
				v-model="selectedTags"
				:existing-tags="tags"
				:typeahead="true">
			</tags-input>
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Remember my password</label>
		</div>
		<button type="submit" class="btn btn-block btn-primary">Submit</button>
	</form>

	<button v-else type="button" @click="link_facebook_account" class="btn btn-primary text-xl">Link Facebook Account
	</button>
	
	<link-facebook></link-facebook>

</div>
</template>
<script>
import LinkFacebook from '../modals/LinkFacebook.vue';
export default {
	props:  ['user'],
	components : { LinkFacebook },
	name: 'NewCampaign',
	data () {
		return {
			user_has_linked_a_social_account : false,
			form : { 
				campaign_name : "",
				billing_account_name : ""
			},
			selectedTags : [],
			tags: 
			[
			{ key: 'web-development', value: 'Web Development' },
			{ key: 'php', value: 'PHP' },
			{ key: 'javascript', value: 'JavaScript' },	
			],
		}
	},
	methods : { 
		
		fetch_campaigns(){
			axios.get(route('campaign.store',this.i))
		},

		save_campaign(){
			axios.post(route('campaign.store', this.id))
			.then((response) => {
				return response.data;
			});
		},

		check_if_theres_a_social_account_linked(){
		
		},
		
		link_facebook_account(){
			this.$modal.show('link-facebook');
		}
	},
	mounted(){
		this.check_if_theres_a_social_account_linked(); 
	},


	computed : {
		userHasLinkedSocialAccounts(){
			this.social_accounts = true ; 
		}
	},
	watch : {
		question(){
			
		}


	}
};
</script>

<style lang="scss" scoped>
</style>