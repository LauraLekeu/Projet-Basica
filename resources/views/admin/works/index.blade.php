@extends('admin.templates.index')

@section('title')
 Liste des works
@endsection


@section('content')

  <div class="page-header">
    <h1>Liste des works</h1>
    <a  href="{{ route('admin.works.add.form')}}">Ajouter un work</a>
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
            <th class="text-center h5">Tags</th>
            <th class="text-center h5">In slider</th>
            <th class="text-center h5">Clients</th>
            <th class="text-center h5">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($works as $work)
            <tr class="text-center">
              <td class="h6">{{ $work->id }}</td>
              <td class="h6">{{ $work->title }}</td>
              <td class="h6">{{ Illuminate\Support\Str::limit($work->content, 50)  }}</td>
              <td class="h6">{{ \Carbon\Carbon::parse($work->created_at)->format('d M, Y') }}</td>
              <td class="h6">{{$work->updated_at ? \Carbon\Carbon::parse($work->updated_at)->format('d M, Y') : '|' }}</td>
              <td class="h6"><img src="{{ asset('assets/img/portfolio/' . $work->image )}}" alt="" width="100"> </td>
              <td class="h6">
                @foreach ($work->tags as $tag)
                  {{ $tag->name }} <br/>
                @endforeach
              </td>
              <td class="h6">{{ $work->inSlider == 1 ? "Slide" : "|" }}</td>
              <td class="h6">{{ $work->client->name }}</td>
              <td class="h6">
                <a href="#"><u>Edit</u></a> |
                <a href="#" class="delete"><u>Delete</u></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>

@endsection
