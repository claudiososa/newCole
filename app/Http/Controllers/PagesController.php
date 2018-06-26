<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Category;
use App\Album;

class PagesController extends Controller
{
  public  function home()
  {
    $album = Album::where('id','>',1)->orderBy('id','DESC')->take(5)->get();
    //dd($publications);
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();

    //dd($publications);
    return view('home',[
      'publications' => $publications,
      'albums' => $albums
    ]);
  }

  public  function welcome()
  {
    //dd($publications);
    return view('welcome');
    // return view('welcome',[
    //   'publications' => $publications,
    //   'albums' => $albums
    // ]);
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
    return view('singleNew',[
      'publications' =>$publications,
      'post'=>$publication,
      'categories'=>$categories
    ]);
  }


  public function singleDirectiva(Publication $publication)
  {
    //dd($publication);
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    $categories = Category::all();
    return view('singleDirectiva',[
      'publications' =>$publications,
      'post'=>$publication,
      'categories'=>$categories
    ]);
  }

  public function singlePage(Publication $publication)
  {
    //dd($publication);
    $publications = Publication::where('id','>',0)
                                ->where('statusNew','publicado')
                                ->where('category_id',4)
                                ->where('category_id',5)
                                ->where('category_id',6)
                                ->orderBy('id','DESC')->take(3)->get();
    $categories = Category::all();
    return view('singlePage',[
      'publications' =>$publications,
      'post'=>$publication,
      'categories'=>$categories
    ]);
  }

  public function singleCourse(Publication $publication)
  {
    //dd($publication);
    $publications = Publication::where('id','>',0)->where('statusNew','publicado')->orderBy('id','DESC')->take(3)->get();
    //$categories = Category::all();
    return view('singleCourse',[
      'publications' =>$publications,
      'post'=>$publication,
      //'categories'=>$categories
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
    $albums = Album::all();
    return view('createPublication',[
      'categories' => $categories,
      'albums' => $albums,
    ]);
  }
}
