@extends('layouts.master')
@section('title', 'Create New Campaign')

@section('head-scripts')
<script>
	function login(){
		FB.login(function(response){
			console.log(response);
		}, { scope : 'public_profile'})
	}

	window.fbAsyncInit = function() {
		FB.init({
			appId  : "637464850090671",
			autoLogAppEvents : true,
			xfbml            : true,
			version          : 'v4.0'
		});
	};
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
@endsection

@section('content')
<ad-accounts></ad-accounts>

<div class="container">
	<dashboard-nav></dashboard-nav>
	<campaign-steps></campaign-steps>

	<new-campaign inline-template>
		<div>
			<form @submit.prevent="create_campaign" class="bg-black p-4 w-1/2" v-if="this.user_has_linked_a_social_ccount = true">
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
		<div v-else>
			<input type="button" onclick="login_facebook()" value="Link with Facebook">
		</div>
		<link-facebook></link-facebook>
	</div>
</new-campaign>
</div>

@endsection