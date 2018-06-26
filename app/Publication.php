<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DatesTranslator;

class Publication extends Model
{
    protected $guarded=[];
    use DatesTranslator;

    
    public function picture()
    {
      return $this->hasMany(Picture::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function album()
    {
      return $this->belongsTo(Album::class);
    }
}
