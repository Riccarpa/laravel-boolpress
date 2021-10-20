@extends('layouts.app')

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
            <div class="text-center mt-4">
                <h1>
                    Vai a 
                    <a class="btn-primary btn" href="{{route('admin.posts.index')}}">Gestione Posts</a>
                    <a class="btn btn-danger ml-2" href="{{ url('/') }}">Guest section</a>
                </h1>
            </div>
        </div>
    </div>
</div>
@endsection
