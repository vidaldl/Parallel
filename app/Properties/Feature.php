<?php

namespace App\Properties;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
  use SoftDeletes;

  public function properties() {
    return $this->belongsToMany(Property::class);
  }
}
