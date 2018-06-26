<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Picture;
use App\File;
use App\Category;
use App\Http\Requests\CreatePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;
use Intervention\Image\Facades\Image;

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
        'album_id' =>$request->input('album_id'),
        'title' =>$request->input('title'),
        'content' =>$request->input('content'),
        'statusNew' =>'despublicado'
      ]);

      $img = $request->file('input-img');

      $imge = $img->store('images','public');

      $name = substr($imge,7,strpos($imge,'.jpeg')-7).'500x281.jpeg';

      $imageLittle = Image::make($img)->resize(500, 281)->save('storage/images/'.$name);
      //$imageLittle = Image::make(Input::file('image'))->resize(500, 281)->save('storage/images/'.$name);

      $image = Picture::create([
        'publication_id'=>$publication->id,
        'name' =>$imge,
        'type'=>'n'
      ]);

      //dd($request->file('input-file'));
      if ($request->file('input-file')) {
        $file = $request->file('input-file');

        $fileA = File::create([
          'publication_id'=>$publication->id,
          'name' =>$file->store('files','public'),
          'type'=>'n'
        ]);
      }

      if ($request->file('input-file1')) {
        $file1 = $request->file('input-file1');

        $fileA1 = File::create([
          'publication_id'=>$publication->id,
          'name' =>$file1->store('files','public'),
          'type'=>'n'
        ]);
      }

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

      $publication->album_id=$request->input('album_id');
      $publication->category_id=$request->input('category_id');
      $publication->id=$request->input('publication_id');
      $publication->user_id=$user->id;
      $publication->title=$request->input('title');
      $publication->album_id=$request->input('album_id');
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
