<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Image;
use App\File;
use App\Category;
use App\Http\Requests\CreatePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publications = Publication::orderBy('id','desc')->paginate(10);
      //dd($publications);
      return view('admin',[
        'publications' => $publications
      ]);
    }

    public function admin()
    {
      $publications = Publication::orderBy('id','desc')->paginate(10);
      //dd($publications);
      return view('admin',[
        'publications' => $publications
      ]);
    }

    public function createPublication(CreatePublicationRequest $request)
    {
      $user= $request->user();
      $publication = Publication::create([
        'category_id' =>$request->input('category_id'),
        'user_id' =>$user->id,
        'title' =>$request->input('title'),
        'content' =>$request->input('content'),
        'statusNew' =>'despublicado'
      ]);

      $img = $request->file('input-img');

      $image = Image::create([
        'publication_id'=>$publication->id,
        'name' =>$img->store('images','public'),
        'type'=>'n'
      ]);

      $file = $request->file('input-file');

      $fileA = File::create([
        'publication_id'=>$publication->id,
        'name' =>$file->store('files','public'),
        'type'=>'n'
      ]);

      $file1 = $request->file('input-file1');

      $fileA1 = File::create([
        'publication_id'=>$publication->id,
        'name' =>$file1->store('files','public'),
        'type'=>'n'
      ]);
      return redirect('home');
    }

    public function editGetPublication(Publication $publication)
    {
      //dd($publication);
      $categories = Category::all();
      return view('admin.editPublication',[
        'publication'=>$publication,
        'categories'=>$categories,
      ]);
    }

    public function editPostPublication(UpdatePublicationRequest $request)
    {
      $user= $request->user();

      //dd($request);
      $publication = Publication::find($request->input('publication_id'));

      $publication->category_id=$request->input('category_id');
      $publication->id=$request->input('publication_id');
      $publication->user_id=$user->id;
      $publication->title=$request->input('title');
      $publication->content=$request->input('content');
      $publication->statusNew=$request->input('statusNew');
      //$publication->statusNew=$request->input('status');


      $publication->save();
      //dd($publication);
      $img = $request->file('input-img');

      if ($img<>null) {
        //$img = $request->file('input-img');
        //dd($publication);
        $image = Image::where('publication_id','=',$publication->id)->first();
        //dd($image);
        //$image->id=$publication->id;
        $image->name=$img->store('images','public');
        $image->save();

      }

      return redirect('home');
    }
}
