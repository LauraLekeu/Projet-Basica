<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class Works extends Controller
{
    public function index(){
      $works = Work::orderBy('created_at', 'desc')
                                          ->take(6)
                                          ->get();
      return view('homepage.index', compact('works'));
    }
}
