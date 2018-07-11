<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/','PagesController@welcome')->name('welcome');
// Route::get('/capacitacion', function () {
//     return view('courses');
// });
Route::get('/update/password/{id}','UserController@editPassword');
Route::post('/update/password','UserController@updatePassword');
Route::post('/searchUser','UserController@searchUser')->name('searchUser');
// Route::post('/searchXSurname','UserController@searchXSurname')->name('searchSurname');
// Route::post('/searchXName','UserController@searchXName')->name('searchName');

Route::resource('/users', 'Users');

Route::get('/fotos','AlbumsController@getAlbums')->name('photos');
Route::get('/galeria','AlbumsController@getList')->name('gallery');
Route::get('/createalbum','AlbumsController@getForm')->name('createAlbum');


Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));
Route::get('/album/{id}','AlbumsController@getAlbum')->name('album');
Route::get('/addimage/{id}', 'ImagesController@getForm')->name('addImage');
Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImagesController@postAdd'));
Route::get('/deleteimage/{id}','ImagesController@getDelete')->name('deleteImage');
Route::post('/moveimage', array('as' => 'move_image','uses' => 'ImagesController@postMove'));


Route::get('/exclusive','NavController@exclusive')->middleware('UserStatus')->name('exclusive');
Route::get('/inactive',function(){
  return view('inactive');
});

Route::get('/capacitacion','NavController@courses')->name('courses');
Route::get('/noticias','NavController@news')->name('news');

Route::get('/contacto','NavController@contact')->name('contact');
Route::get('/directivas','NavController@directivas')->name('directivas');
Route::get('/directiva/{publication}','PagesController@singleDirectiva')->name('directiva');

Route::get('/curso/{publication}','PagesController@singleCourse')->name('curso');
Route::get('/noticia/{publication}','PagesController@singleNew')->name('noticia');
Route::get('/pagina/{publication}','PagesController@singlePage')->name('pagina');


Auth::routes();
Route::get('/publication/create','PagesController@create')->middleware('auth')->name('publicationCreate');
Route::get('/publication/edit/{publication}','HomeController@editGetPublication')->middleware('auth');
Route::post('/publication/edit','HomeController@editPostPublication')->middleware('auth');
Route::post('/publication/create','HomeController@createPublication')->middleware('auth')->name('publicationCreatePost');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administrator', 'HomeController@admin')->name('administrator');
