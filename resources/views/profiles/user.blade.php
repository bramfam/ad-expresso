@extends('layouts.master')

@section('title', 'Hey')

@section('content')
<user-profile :user="{{ auth()->user() }}"></user-profile>
@stop