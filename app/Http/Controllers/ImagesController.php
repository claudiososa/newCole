<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Album;
use App\Photo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{

  public function getForm($id)
  {
    $album = Album::find($id);
    return view('admin.addImage',[
      'album'=>$album
    ]);
    // return View::make('addimage')
    // ->with('album',$album);
  }

public function postAdd()
{
  $rules = array(

    'album_id' => 'required|numeric|exists:albums,id',
    'image'=>'required|image'

  );

  $validator = Validator::make(Input::all(), $rules);
  if($validator->fails()){

    return Redirect::route('add_image',array('id' =>Input::get('album_id')))
    ->withErrors($validator)
    ->withInput();
  }
// ------------------------
//
//   $img = $request->file('input-img');
//
//
//   $image = Image::create([
//     'publication_id'=>$publication->id,
//     'name' =>$img->store('images','public'),
//     'type'=>'n'
//   ]);
// --------------------------

  $file = Input::file('image');
  $fileName = $file->store('albums','public');
  //dd($fileName);
  $name = substr($fileName,7,strpos($fileName,'.jpeg')-7).'500x281.jpeg';
  //dd($name);
  //$fileNameLittle = substr($fileName,0,strpos($fileName,'.jpeg')).'500x281.jpeg';
  //$fileLittle = Image::make($file->getRealPath())->resize(500, 281);
  $fileLittle = Image::make(Input::file('image'))->resize(500, 281)->save('storage/albums/'.$name);

  Photo::create(array(
    'description' => Input::get('description'),
    'image' => $fileName,
    'imageLittle' => 'albums/'.$name,
    //'imageLittle' => Storage::put('public/albums/myUniqueFileNameHere.jpg', $resize->__toString());,
    //'imageLittle' => $filenameLittle,

    //'image' => $file->store('albums','public'),

    'album_id'=> Input::get('album_id')
  ));






  //$fileLittle->save('public/images');

  //$fileLittle = Image::make($file)->resize(500, 281)->save('/public/images');

  //$img = Image::make($image->getRealPath())->resize(400, 300);
  //$fileLittle->save('/images');

  // $random_name = str_random(8);
  // $destinationPath = 'storage/albums/';
  // $extension = $file->getClientOriginalExtension();
  // $filename='albums/'.$random_name.'_album_image.'.$extension;
  //$filenameLittle='albums/'.$random_name.'500x281_album_image.'.$extension;


  // $uploadSuccess = Input::file('image')->move($destinationPath, $filename);


//  $fileLittle->store('albums','public');






  return Redirect::route('album',array('id'=>Input::get('album_id')));
}
public function getDelete($id)
{
  $image = Photo::find($id);

  $image->delete();

  return Redirect::route('album',array('id'=>$image->album_id));
}
public function postMove()
{
  $rules = array(
    'new_album' => 'required|numeric|exists:albums,id',
    'photo'=>'required|numeric|exists:images,id'
  );
  $validator = Validator::make(Input::all(), $rules);
  if($validator->fails()){

    return Redirect::route('index');
  }
  $image = Photo::find(Input::get('photo'));
  $image->album_id = Input::get('new_album');
  $image->save();
  return Redirect::route('album',array('id'=>Input::get('new_album')));
}

 }
