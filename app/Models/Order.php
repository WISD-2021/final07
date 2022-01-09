<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //每一筆訂都有一個對應的會員(外來鍵)
    public function members()
    {
        return $this->belongsTo(Member::class);
    }
}
