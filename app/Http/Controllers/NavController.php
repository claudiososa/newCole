<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class NavController extends Controller
{
    public function courses()
    {
      $publications = Publication::where('id','>',0)->where('category_id','=',1)->orderBy('id','DESC')->take(3)->get();
      //dd($publications);
      return view('courses',[
        'publications'=>$publications
      ]);
    }
}
