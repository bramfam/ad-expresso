@extends('layouts.master')
@section('title', 'Campaign')
@section('content')

<campaign-view :campaign="{{ $campaigns }}"></campaign-view>

{{-- <ul>
	@foreach ($campaigns as $campaign)
		<li>{{  $campaign->creator_id  }} {{  $campaign->name  }}</li>
	@endforeach
</ul>
--}}
@endsection