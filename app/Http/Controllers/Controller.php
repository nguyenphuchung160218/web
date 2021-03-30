<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Diem;
use App\Models\DaoDuc;
use App\Models\HocTap;
use App\Models\HoatDongKhac;
use App\Models\VanThe;
use App\Models\Class1;
use App\Models\Week;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
    	$diems = Diem::join('tuan','diem.tuan_id','=','tuan.id')->join('hoctap','diem.hoctap_id','=','hoctap.id')->join('daoduc_tacphong','diem.daoduc_id','=','daoduc_tacphong.id')->join('vanthemi','diem.vanthemi_id','=','vanthemi.id')->join('hoatdongkhac','diem.hoatdongkhac_id','=','hoatdongkhac.id')->join('lop','diem.lop_id','=','lop.id')->select('tuan.tentuan as tentuan', 'hoctap.diem','diem.id','lop.khoi as lopkhoi','lop.ten as tenlop','hoctap.diem as hoctap','hoctap.diemtru as truhoctap','hoctap.solantru as slhoctap','daoduc_tacphong.diem as daoduc','daoduc_tacphong.diemtru as trudaoduc','daoduc_tacphong.solantru as sldaoduc','vanthemi.diem as vanthe','vanthemi.diemtru as truvanthe','vanthemi.solantru as slvanthe','hoatdongkhac.diem as hoatdongkhac','hoatdongkhac.diemtru as truhoatdongkhac','hoatdongkhac.solantru as slhoatdongkhac','hoatdongkhac.diemcong as diemconghoatdong','hoatdongkhac.solancong as solanconghoatdong')->get();
        $viewData = [
           "diems"=>$diems
        ];
        return view('index',$viewData);
    }
}
