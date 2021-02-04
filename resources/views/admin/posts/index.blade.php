@extends('admin.templates.index')

@section('title')
 Liste des posts
@endsection


@section('content')

  <div class="page-header">
    <h1>Liste des posts</h1>
    <a  href="{{ route('admin.posts.add.form')}}">Ajouter un post</a>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center h5">#</th>
            <th class="text-center h5">Title</th>
            <th class="text-center h5">Content</th>
            <th class="text-center h5">Created_at</th>
            <th class="text-center h5">Updated_at</th>
            <th class="text-center h5">Image</th>
            <th class="text-center h5">Categorie</th>
            <th class="text-center h5">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td class="h6">{{ $post->id }}</td>
              <td class="h6">{{ $post->title }}</td>
              <td class="h6">{{ Illuminate\Support\Str::limit($post->content, 50)  }}</td>
              <td class="h6">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</td>
              <td class="h6">{{ \Carbon\Carbon::parse($post->updated_at)->format('d M, Y') }}</td>
              <td class="h6 text-center"><img src="{{ asset('assets/img/blog/' . $post->image )}}" alt="" width="100"> </td>
              <td class="h6">{{ $post->categorie->name }}</td>
              <td class="h6">
                <a href="{{ route('admin.posts.edit.form', ['post' => $post->id])}}"><u>Edit</u></a> |
                <a href="#" class="delete"><u>Delete</u></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>

@endsection
