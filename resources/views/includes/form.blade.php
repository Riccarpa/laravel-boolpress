<div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <form>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Testo del post</label>
            <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Inserisci copertina del post</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
          </div>
       
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
    
    </form>
</div>