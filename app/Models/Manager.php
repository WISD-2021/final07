<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //一個管理者可以管理多個器材
    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

}
