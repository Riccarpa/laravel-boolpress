@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table">
    <thead>
      <tr >
        <th scope="col">Title</th>
        <th scope="col">Scritto il</th>
        
      </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                
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