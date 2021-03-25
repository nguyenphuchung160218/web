<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class1 extends Model
{
    use HasFactory;
    protected $table ='lop';
    protected $guarded=[''];
    public function tuan()
    {
        return $this->belongsTo(Week::class,'lop_id');
    }
}

   