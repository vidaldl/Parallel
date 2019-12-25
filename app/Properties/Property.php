<?php

namespace App\Properties;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
  protected $fillable = [
    'image',
    'name',
    'description',
    'city',
    'location',
    'precio'
  ];

    use SoftDeletes;

    public function deleteImage() {

      Storage::delete($this->image);

    }




    public function feature_item() {
      return $this->belongsToMany(Feature::class)
      ->withPivot(['value']);
    }
}
