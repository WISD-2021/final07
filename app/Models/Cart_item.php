<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    use HasFactory;

    //每一個購物車都對應一個會員(外來鍵)
    public function members()
    {
        return $this->belongsTo(Member::class);
    }

    //每一個購物車都對應一個器材(外來鍵)
    public function equipments()
    {
        return $this->belongsTo(Equipment::class);
    }
}
