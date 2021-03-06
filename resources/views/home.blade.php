@extends('layouts.app')
<style>
    .container {
        background-color: papayawhip;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <p></p>
                    <a href="http://127.0.0.1:8000/childregistration"><strong>Register a child!<strong></strong></a href>

                </div>
                <div class="card-body">
                    <p></p>
                    <a href="http://127.0.0.1:8000/showchildren"><strong>Show my children!</strong></a href>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
