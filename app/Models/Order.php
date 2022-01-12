<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'id',
        'member_id',
        'total',
        'status',
        'rent_date',
        'rent_date',
        'pickup_date',
        'clean_fee',
        'damages',
        'send_date',
        'manager_id',
    ];

    //每一筆訂都有一個對應的會員(外來鍵)
    public function members()
    {
        return $this->belongsTo(Member::class);
    }

    //一個租賃單都有對應租賃明細中看到
    public function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }
}
