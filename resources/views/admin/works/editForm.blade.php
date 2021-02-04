@extends('admin.templates.index')

@section('title')
  Modification du post
@endsection


@section('content')


    <br/>
    <br/>
    <h1>Modification du work</h1>
    <br />
    <div>
      <a href="{{ route('admin.works') }}">Retour vers la liste des works</a>
    </div>
    <hr/>

    <form action="#" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Titre du work</label>
        <div class="col-sm-8">
         <input type="text" name="title" id="title" value="{{ $work->title }}">
        </div>
      </div>

      <div class="form-group row">
        <label for="content" class="col-sm-2 col-form-label">Contenu du work</label>
        <div class="col-sm-8">
         <textarea name="content" id="content" placeholder="Texte">{{ $work->content }}</textarea>
        </div>
      </div>

      {{-- <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Télécharger une image</label>
        <div class="col-sm-8">
         <input type="file" name="image" id="image" accept=".jpg,.gif,.png">
        </div>
      </div> --}}

      <div class="form-group row">
      <label class="col-sm-2 col-form-label">Tags</label>
      <div class="col-sm-8">
        @foreach ($tags as $tag)
           <input type="checkbox" name="tags[]" id="{{ $tag->name }}" value="{{ $tag->id }}" {{ in_array($tag->id, $work->tags->pluck('id')->toArray())  ? 'checked="checked"' : ''}}>
           <label for="{{ $tag->name }}"> {{ $tag->name }} </label>
           <br/>
        @endforeach
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Ajouter dans le slide </label>
      <div class="col-sm-8">
        <input name="inSlider" class="form-check-input" type="checkbox" id="inSlider" {{$work->inSlider === 1 ? 'checked="checked"' : ''}}>
        <label class="form-check-label" for="inSlider"></label>
      </div>
    </div>

      <div class="form-group row">
        <label for="client" class="col-sm-2 col-form-label">Client</label>
        <div class="col-sm-8">
          <select name="client" id='client'>
            @foreach ($clients as $client)
              <option value="{{ $client->id }}" {{$client->id === $work->client_id ? 'selected="selected"' : ''}}>{{ $client->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <input type="submit" value="Ajouter">
    </form>


@endsection
