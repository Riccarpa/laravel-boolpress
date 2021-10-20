@extends('layouts.app')

@section('content')
<div class="container">
  @if(session('delete'))
    <div class="alert-success p-3 mb-2">Il post "{{session('delete')}}" é stato eliminato con successo</div>
  @endif
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Scritto il</th>
          <th scope="col " class="d-flex justify-content-end">
            <a class="btn btn-success mr-1" href="{{route('admin.posts.create')}}">Nuovo post</a>
            <a class="btn btn-warning" href="{{route('admin.trashed.index')}}">Cestino</a>
          </th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td></td>
          </tr>
          @forelse ($posts as $post)
              <tr>
                  <td>{{$post->title}}</td>
                  <td>{{$post->created_at}}</td>
                  <td class="d-flex ">
                    <a class="btn btn-primary mr-2" href="{{route('admin.posts.show',$post->id)}}">Vai</a>
                    <form method="POST" action="{{route('admin.posts.destroy',$post->id)}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit"  class="btn btn-danger type">Elimina</button>
                    </form>
                    
                  </td>
              </tr>
              @empty
              <tr>
                <td colspan="3" class="text-center">Non ci sono posts da visualizzare</td>
              </tr>
              @endforelse
              
            </tbody>
          </table>
      {{$posts->links()}}
</div>
@endsection