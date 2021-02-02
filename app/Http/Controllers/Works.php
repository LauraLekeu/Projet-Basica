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
      return view('works.index', compact('works'));
    }

    public function more(Request $request) {
        $limit = (isset($request->limit)) ? $request->limit : 6;

        $works = Work::orderBy('created_at', 'desc')
                     ->take($limit)
                     ->offset($request->offset)
                     ->get();

        return view('works._liste', compact('works'));
      }
}
