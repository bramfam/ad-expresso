@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 jumbotron">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in as {{  auth()->user()->fullName() }}!
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="container">
    <dashboard-nav></dashboard-nav>
</div>


@endsection
