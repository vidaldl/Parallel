<?php

namespace App\Catalog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class CatalogItem extends Model
{
  use SoftDeletes;

  public function deleteImage() {

    Storage::delete($this->image);

  }
}
