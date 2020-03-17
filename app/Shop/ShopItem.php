<?php

namespace App\Shop;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ShopItem extends Model
{
  use SoftDeletes;

  public function deleteImage() {

    Storage::delete($this->img_primaria);

  }

  public function deleteSecImage() {

    Storage::delete($this->img_secundaria);

  }
}