<?php

namespace App\Portfolio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Portfolio\PortfolioCategory;

class PortfolioItem extends Model
{
    use SoftDeletes;

    public function deleteImage() {

      Storage::delete($this->image);

    }

    protected $fillable = [
      'title',
      'subtitle',
      'image'
    ];

    public function portfolio_category() {
      return $this->belongsToMany(PortfolioCategory::class);
    }
}
