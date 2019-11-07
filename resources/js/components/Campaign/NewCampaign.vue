<script>
import LinkFacebook from '../modals/LinkFacebook.vue';
export default {
	props:  ['user'],
	components : { LinkFacebook },
	name: 'NewCampaign',
	data () {
		return {
			user_has_linked_a_social_account : false, // change this to true if naay na match nga account sa table
			link_facebook_route : route('auth.facebook','facebook'),
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
		check_login_state(){
			
			
		},




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
			// queries something to the database if there's a social account linked.

			console.log("Should return true or false if a user has a linked fb or google login");
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
	// all in the data can be written her
	question(){


	}


}
};
</script>

<style lang="scss" scoped>
</style>