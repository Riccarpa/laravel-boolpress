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

    @if($post->exists)
      <form action="{{route('admin.posts.update',$post->id)}}" method="POST">
        @method('PATCH')
    @else
       <form action="{{route('admin.posts.store')}}" method="POST">
    @endif

        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
        </div>
        <div class="form-group">
            <label for="content">Testo del post</label>
            <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{old('content', $post->content)}}</textarea>
        </div>
          <div class="form-group">
            <label for="image">Inserisci copertina del post</label>
            <input type="text" class="form-control" id="image" name="image" value="{{old('image', $post->image)}}">
          </div>
          <select class="custom-select my-2" name="category_id">
            
            <option>Nessuna categoria</option>
            @foreach ($categories as $category)
                <option @if(old('category_id',$post->category_id)== $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
       
        <button type="submit" class="btn btn-primary">{{request()->routeIs('admin.posts.edit', $post->id) ?'Modifica':'Crea'}}</button>
      </form>
    
    </form>

</div>