<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Diem;
use App\Models\DaoDuc;
use App\Models\HocTap;
use App\Models\HoatDongKhac;
use App\Models\VanThe;
use App\Models\Class1;
use App\Models\Week;


class DiemController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $diems = Diem::join('tuan','diem.tuan_id','=','tuan.id')->join('hoctap','diem.hoctap_id','=','hoctap.id')->join('daoduc_tacphong','diem.daoduc_id','=','daoduc_tacphong.id')->join('vanthemi','diem.vanthemi_id','=','vanthemi.id')->join('hoatdongkhac','diem.hoatdongkhac_id','=','hoatdongkhac.id')->join('lop','diem.lop_id','=','lop.id')->select('tuan.tentuan as tentuan', 'hoctap.diem','diem.id','lop.khoi as lopkhoi','lop.ten as tenlop','hoctap.diem as hoctap','hoctap.solantru as slhoctap','daoduc_tacphong.diem as daoduc','daoduc_tacphong.solantru as sldaoduc','vanthemi.diem as vanthe','vanthemi.solantru as slvanthe','hoatdongkhac.diem as hoatdongkhac','hoatdongkhac.solantru as slhoatdongkhac','hoatdongkhac.diemcong as diemconghoatdong','hoatdongkhac.solancong as solanconghoatdong')->get();
        $viewData = [
           "diems"=>$diems
        ];
        return view('admin::diem.index',$viewData);
    }

    public function create()
    {
        $class1=Class1::all();
        $week=Week::all();
        $viewData=[
            'class1' => $class1,
            'week' => $week,
        ];
        return view('admin::diem.create',$viewData);
    }

    public function store(Request $request)
    {  
        $this->insertOrUpdate($request);
        return redirect()->back()->with('success','Thêm mới thành công');  
    }

    public function edit($id)
    {
        $diems = Diem::find($id);
        
        return view('admin::diem.update',compact('diems'));
    }

    public function update(Request $request, $id)
    {
        $this->insertOrUpdate($request,$id);
        return redirect()->back()->with('success','Cập nhật thành công');

    }
     public function insertOrUpdate($request,$id='')
    {
            $diem = new Diem();
            if($id) $diem= Diem::find($id);
                $hoctapId=HocTap::insertGetId([
                'diem' => $request->hoctap,
                'solantru' => $request->slhoctap,
                ]);
                $vantheId=VanThe::insertGetId([
                    'diem' => $request->vanthe,
                    'solantru' => $request->slvanthe,
                ]);
                $daoducId=DaoDuc::insertGetId([
                    'diem' => $request->daoduc,
                    'solantru' => $request->sldaoduc,
                ]);
                $hoatdongkhacId=HoatDongKhac::insertGetId([
                    'diem' => $request->hoatdongkhac,
                    'solantru' => $request->slhoatdongkhac,
                ]);
                Diem::insert([
                    'tuan_id' => $request->tuan_id,
                    'lop_id' => $request->lop_id,
                    'hoctap_id' => $hoctapId,
                    'vanthemi_id' => $vantheId,
                    'daoduc_id' => $daoducId,
                    'hoatdongkhac_id' => $hoatdongkhacId,
                ]);
    }
    
}
