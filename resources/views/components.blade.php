@extends('layouts.master')

@section('title', 'Home')

@section('content')

{{-- {{ auth()->user()->first_name }} --}}

<div class="container">
	<p>Spinner</p>	

	<div class="spinner-border text-primary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-secondary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-success" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-danger" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-warning" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-info" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-light" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-dark" role="status">
		<span class="sr-only">Loading...</span>
	</div>

	<p>Growing spinner</p>

	<div class="spinner-grow" role="status">
		<span class="sr-only">Loading...</span>
	</div>


	<h3>Or </h3>


	<div class="spinner-border spinner-border-sm" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-grow spinner-grow-sm" role="status">
		<span class="sr-only">Loading...</span>
	</div>


	<p>Some list groups..</p>

	<ul class="list-group">
		<li class="list-group-item">Cras justo odio</li>
		<li class="list-group-item">Dapibus ac facilisis in</li>
		<li class="list-group-item">Morbi leo risus</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
	</ul>


	<div class="mt-4 card" style="width: 18rem;">
		<img src="..." class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Cras justo odio</li>
			<li class="list-group-item">Dapibus ac facilisis in</li>
			<li class="list-group-item">Vestibulum at eros</li>
		</ul>
		<div class="card-body">
			<a href="#" class="card-link">Card link</a>
			<a href="#" class="card-link">Another link</a>
		</div>
	</div>


	<h3>Button toolbar.</h3>
	<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
		<div class="btn-group mr-2" role="group" aria-label="First group">
			<button type="button" class="btn btn-secondary">1</button>
			<button type="button" class="btn btn-secondary">2</button>
			<button type="button" class="btn btn-secondary">3</button>
			<button type="button" class="btn btn-secondary">4</button>
		</div>
		<div class="btn-group mr-2" role="group" aria-label="Second group">
			<button type="button" class="btn btn-secondary">5</button>
			<button type="button" class="btn btn-secondary">6</button>
			<button type="button" class="btn btn-secondary">7</button>
		</div>
		<div class="btn-group" role="group" aria-label="Third group">
			<button type="button" class="btn btn-secondary">8</button>
		</div>
	</div>

	<p class="mt-4">Some breadcrumbs.. </p>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Home</li>
		</ol>
	</nav>



	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Library</li>
		</ol>
	</nav>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data</li>
		</ol>
	</nav>



</div>


<div class="container">
	<div class="row">
		<div class="col-sm">
			One of three columns
		</div>
		<div class="col-sm">
			One of three columns
		</div>
		<div class="col-sm">
			One of three columns
		</div>
	</div>
</div>


<p>
	<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		Link with href
	</a>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		Button with data-target
	</button>
</p>
<div class="collapse" id="collapseExample">
	<div class="card card-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>
</div>


@endsection
