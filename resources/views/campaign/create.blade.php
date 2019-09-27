@extends('layouts.master')
@section('title', 'Create New Campaign')
@section('content')
<ad-accounts></ad-accounts>

<div class="container">
	<dashboard-nav></dashboard-nav>
	<campaign-steps></campaign-steps>
    <new-campaign></new-campaign>
</div>

@endsection