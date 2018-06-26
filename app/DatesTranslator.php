<?php
namespace App;

use Jenssegers\Date\Date;


trait DatesTranslator{
  public function getUpdatedAtAttribute($date){
    return new Date($date);
  }

  public function getCreatedAtAttribute($date){
    return new Date($date);
  }
}

 ?>
