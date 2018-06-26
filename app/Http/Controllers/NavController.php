<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
//use Cargon\Carbon;

class NavController extends Controller
{
    public function courses()
    {
      $publications = Publication::where('id','>',0)->where('category_id','=',1)->orderBy('id','DESC')->paginate(3);
      //dd($publications);
      return view('courses',[
        'publications'=>$publications
      ]);
    }

    public function news()
    {
      $publications = Publication::where('id','>',0)
                                  ->where('category_id','=',2)
                                  ->where('statusNew','=','publicado')
                                  ->orderBy('id','DESC')->paginate(3);
      //dd($publications);
      return view('news',[
        'publications'=>$publications
      ]);
    }

    public function directivas()
    {
      $publications = Publication::where('id','>',0)->where('category_id','=',5)->orderBy('id','DESC')->paginate(3);
      //dd($publications);
      return view('directiva',[
        'publications'=>$publications
      ]);
    }
}
