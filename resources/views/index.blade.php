@extends('layouts.master')
@section('title', 'Home')
@section('content')

	<landing-page user="{{  auth()->user() }}"></landing-page>

@endsection

