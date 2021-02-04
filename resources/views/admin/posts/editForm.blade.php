@extends('admin.templates.index')

@section('title')
  Modification du post
@endsection


@section('content')

  <br/>
  <br/>
  <h1>Modification du post</h1>
  <p class="h4">N°{{ $post->id }} - {{ $post->title }}</p>
  <br />
  <div>
    <a href="{{ route('admin.posts') }}">Retour vers la liste des posts</a>
  </div>
  <hr/>

  <form action="{{ route('admin.posts.edit.update', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Titre du post</label>
      <div class="col-sm-8">
       <input type="text" name="title" id="title" value="{{ $post->title }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="content" class="col-sm-2 col-form-label">Contenu du post</label>
      <div class="col-sm-8">
       <textarea name="content" id="content" >{{ $post->content }}</textarea>
      </div>
    </div>

    {{-- <div class="form-group row">
      <label for="image" class="col-sm-2 col-form-label">Télécharger une image</label>
      <div class="col-sm-8">
       <input type="file" name="image" id="image" accept=".jpg,.gif,.png">
      </div>
    </div> --}}

    <div class="form-group row">
      <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
      <div class="col-sm-8">
        <select name="categorie" id='categorie'>
          <?php foreach ($categories as $categorie): ?>
            <option value="{{ $categorie->id }}" {{$categorie->id === $post->categorie_id ? 'selected="selected"' : ''}} > {{ $categorie->name }}</option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <input type="submit" value="Modifier">
  </form>

@endsection
