<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Diem;
use App\Models\User;
use App\Models\DaoDuc;
use App\Models\HocTap;
use App\Models\HoatDongKhac;
use App\Models\VanThe;
class TestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$diems = Diem::join('tuan','diem.tuan_id','=','tuan.id')
    	->join('hoctap','diem.hoctap_id','=','hoctap.id')
    	->join('daoduc_tacphong','diem.daoduc_id','=','daoduc_tacphong.id')
    	->join('vanthemi','diem.vanthemi_id','=','vanthemi.id')
    	->join('hoatdongkhac','diem.hoatdongkhac_id','=','hoatdongkhac.id')
    	->join('lop','diem.lop_id','=','lop.id')
    	->select('tuan.tentuan as tentuan',
    		'lop.khoi as lopkhoi','lop.ten as tenlop',
    		'hoctap.diem as hoctap','hoctap.diemtru as truhoctap','hoctap.solantru as slhoctap',
    		'daoduc_tacphong.diem as daoduc','daoduc_tacphong.diemtru as trudaoduc','daoduc_tacphong.solantru as sldaoduc',
    		'vanthemi.diem as vanthe','vanthemi.diemtru as truvanthe','vanthemi.solantru as slvanthe',
    		'hoatdongkhac.diem as hoatdongkhac','hoatdongkhac.diemtru as truhoatdongkhac','hoatdongkhac.solantru as slhoatdongkhac')
    	->get();
        return $diems;
    }
}
