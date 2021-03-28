<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diem extends Model
{
    use HasFactory;
    protected $table= 'diem';
    public function tuan()
    {
        return $this->belongsTo(Week::class,'id');
    }
}
