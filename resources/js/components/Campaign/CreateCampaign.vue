<template>	
	<form class="mt-4" action="/campaign" method="POST">
		<div class="form-group">
			<h3 class="font-weight-bold">Create a Campaign</h3>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Campaign Name</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Example select</label>
			<select class="form-control" id="exampleFormControlSelect1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlSelect2">Example multiple select</label>
			<select multiple class="form-control" id="exampleFormControlSelect2">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>

		<div class="form-group">
			<label for="exampleFormControlTextarea1">Example textarea</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Example textarea</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<div class="form-group">
			<button type="button" class="btn btn-block btn-success">Success</button>
		</div>
	</form>
</template>

<script>
export default { 

	data(){
		return { 
		}
	},

	methods : { 
		saveCampaign(){

		}
	}

};
</script>