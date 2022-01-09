<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //一個會員可以有多筆訂單
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    //一個會員可以在購物車中加入多個器材
    public function cart_items()
    {
        return $this->hasMany(Cart_item::class);
    }
}
