<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Photo;

class Album extends Model
{
  protected $table = 'albums';

  protected $fillable = array('name','description','cover_image');

  public function Photos(){
    return $this->hasMany(Photo::class);
  }

  public function publication()
  {
    //return $this->hasMany(Publication::class);
    return $this->belongsTo(Publication::class);
  }
}
