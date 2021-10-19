@extends('layouts.app')



@section('content')
<div class="container">
  <div class="card" >
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p>{{$post->content}}</p>
      </div>
  </div>
</div>
@endsection