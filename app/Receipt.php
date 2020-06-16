<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop\ShopItem;
class Receipt extends Model
{
    public function shop_items() {
      return $this->belongsToMany(ShopItem::class)->withPivot('item_qty');
    }
}
