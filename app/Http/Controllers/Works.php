<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class Works extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index(){

      $works = Work::orderBy('created_at', 'desc')
                                          ->take(6)
                                          ->get();
      return view('works.index', compact('works'));
    }


    /**
     * [show description]
     * @param  Work   $work [description]
     * @return [type]       [description]
     */
    public function show($id){
      $work = Work::find($id);
      return view('works.show', compact('work'));
    }


    /**
     * [more description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function more(Request $request) {

        $limit = (isset($request->limit)) ? $request->limit : 6;

        $works = Work::orderBy('created_at', 'desc')
                     ->take($limit)
                     ->offset($request->offset)
                     ->get();

        return view('works._liste', compact('works'));
      }
}
