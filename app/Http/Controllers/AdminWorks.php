<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class AdminWorks extends Controller
{


    public function index(){
        $works = Work::orderBy('id', 'desc')->get();
        return view('admin.works.index', compact('works'));
    }


    public function addForm(){
        $works = Work::orderBy('id', 'asc')->get();
        $tags = \App\Models\Tag::orderBy('name', 'asc')->get();
        $clients = \App\Models\Client::orderBy('name', 'asc')->get();
        return view('admin.works.addForm', compact('works', 'tags', 'clients'));
    }


    public function addInsert(Request $request){
      $work = new Work;

      $work->title = $request->title;
      $work->content = $request->content;
      $work->created_at = NOW();
      $work->updated_at = null;
      $work->client_id = $request->client;

      if ($request->inSlider) {
        $work->inSlider = 1;
      }

      if ($request->file('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('assets/img/portfolio'), $imageName);

        $work->image = $imageName;
      }

      $work->save();


      $work->tags()->attach($request->tags);

      return redirect()->route('admin.works');
    }


    public function editForm($id){
        $work = Work::find($id);
        $tags = \App\Models\Tag::orderBy('name', 'asc')->get();
        $clients = \App\Models\Client::orderBy('name', 'asc')->get();
        return view('admin.works.editForm', compact('work', 'clients', 'tags'));
    }


}
