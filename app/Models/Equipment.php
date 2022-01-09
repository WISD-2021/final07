<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    //任何一個器材都對應一個管理者(外來鍵)
    public function managers()
    {
        return $this->belongsTo(Manager::class);
    }

    //一個器材都能出現在購物車中
    public function cart_items()
    {
        return $this->hasMany(Cart_item::class);
    }

    //一個器材都可以在任何租賃明細中看到
    public function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }
}
