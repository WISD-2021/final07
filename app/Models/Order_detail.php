<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'order_id',
        'equipment_id',
        'quantity',
    ];

    //一個租賃明細都能對應的任何器材(外來鍵)
    public function equipments()
    {
        return $this->belongsTo(Equipment::class);
    }

    //一個租賃明細都能對應到一個租賃單(外來鍵)
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
