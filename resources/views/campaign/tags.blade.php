@extends('layouts.master')
@section('title', 'User Tags')

@section('content')

<tags-view :campaign="{{ $campaigns }}"></tags-view>

@endsection