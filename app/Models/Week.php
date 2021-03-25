<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $table ='tuan';
    protected $guarded=[''];
    // public function diems()
    // {
    //     return $this->hasMany(Diem::class,'diem_id');
    // }
    public function lop()
    {
        return $this->hasMany(Class1::class,'id');
    }
}

   