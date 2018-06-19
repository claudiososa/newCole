<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Category;

class PagesController extends Controller
{
  public  function home()
  {
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    //dd($publications);
    return view('home',[
      'publications' => $publications
    ]);
  }

  public function access()
  {
        $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    return view('access',[
      'publications' => $publications
    ]);
  }

  public function quienes()
  {
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    return view('quienes',[
      'publications' => $publications
    ]);
  }

  public function contacto()
  {
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    return view('contacto',[
      'publications' => $publications
    ]);
  }

  public function que()
  {
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    return view('quehacemos',[
      'publications' => $publications
    ]);
  }

  public function singleNew(Publication $publication)
  {
    //dd($publication);
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    $categories = Category::all();
    return view('news.single',[
      'publications' =>$publications,
      'post'=>$publication,
      'categories'=>$categories
    ]);
  }

  public function autoridades()
  {
      $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();

    return view('autoridades',[
      'publications' => $publications
    ]);
  }

  public function create()
  {
    $categories = Category::all();
    return view('createPublication',[
      'categories' => $categories,
    ]);
  }
}
