@extends('admin.templates.index')

@section('title')
  Ajouter un post
@endsection


@section('content')

  <br/>
  <br/>
  <h1>Nouveau post</h1>
  <br />
  <div>
    <a href="{{ route('admin.posts') }}">Retour vers la liste des posts</a>
  </div>
  <hr/>

  <form action="{{ route('admin.posts.add.insert') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Titre du post</label>
      <div class="col-sm-8">
       <input type="text" name="title" id="title" placeholder="Nom">
      </div>
    </div>

    <div class="form-group row">
      <label for="content" class="col-sm-2 col-form-label">Contenu du post</label>
      <div class="col-sm-8">
       <textarea name="content" id="content" placeholder="Texte"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="image" class="col-sm-2 col-form-label">Télécharger une image</label>
      <div class="col-sm-8">
       <input type="file" name="image" id="image" accept=".jpg,.gif,.png">
      </div>
    </div>

    <div class="form-group row">
      <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
      <div class="col-sm-8">
        <select name="categorie" id='categorie'>
          @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <input type="submit" value="Ajouter">
  </form>

@endsection
