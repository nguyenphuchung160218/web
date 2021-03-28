<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $table ='tuan';
    protected $guarded=[''];
    const STATUS_PUBLIC =1;
    const STATUS_PRIVATE =0;
     protected $status = [
        1=>[
            'name'=>'Public',
            'class'=>'label-danger'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    public function getStatus()
    {
        return data_get($this->status,$this->t_status,'[N\A]');
    }

    public function diems()
    {
        return $this->hasMany(Diem::class,'diem_id');
    }
    public function lop()
    {
        return $this->hasMany(Class1::class,'id');
    }
}

   