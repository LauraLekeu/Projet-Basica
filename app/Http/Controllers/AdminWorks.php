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


}
