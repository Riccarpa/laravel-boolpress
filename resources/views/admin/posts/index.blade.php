@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table">
      <thead>
        <tr>
          <th scope="col">TItle</th>
          <th scope="col">Scritto il</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
          @forelse ($posts as $post)
              <tr>
                  <td>{{$post->title}}</td>
                  <td>{{$post->created_at}}</td>
                  <td><a class="btn btn-primary" href="{{route('admin.posts.show',$post->id)}}">Vai</a></td>
              </tr>
          @empty
              <tr>
                  <td colspan="3" class="text-center">Non ci sono posts da visualizzare</td>
              </tr>
          @endforelse
  
      </tbody>
    </table>
</div>
@endsection