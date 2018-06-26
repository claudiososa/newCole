<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Publication;
use App\Album;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $albums = Album::where('id','>',1)->with('Photos')->orderBy('id','DESC')->take(3)->get();
      $publicationsFooter = Publication::where('id','>',0)
                                  //->with('image')
                                  ->where('statusNew','publicado')
                                  ->where('category_id','=',2)
                                  ->orderBy('id','DESC')
                                  ->take(4)->get();

        view()->share('publicationsFooter', $publicationsFooter);
        view()->share('albums', $albums);
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
