<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function getStatusAttribute($value) {
      return ($value) ? 'Player' : 'Team Leader';
    }

    public function setStatusAttribute($value) {
      $this->attributes['status'] =
       (strcasecmp($value, 'Player') == 0) ? true : false;
    }
}
