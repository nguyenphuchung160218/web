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
        $diems = Diem::join('tuan','diem.tuan_id','=','tuan.id')->join('hoctap','diem.hoctap_id','=','hoctap.id')->join('daoduc_tacphong','diem.daoduc_id','=','daoduc_tacphong.id')->join('vanthemi','diem.vanthemi_id','=','vanthemi.id')->join('hoatdongkhac','diem.hoatdongkhac_id','=','hoatdongkhac.id')->join('lop','diem.lop_id','=','lop.id')->select('tuan.tentuan as tentuan', 'hoctap.diem','diem.id','lop.khoi as lopkhoi','lop.ten as tenlop','hoctap.diem as hoctap','hoctap.diemtru as truhoctap','hoctap.solantru as slhoctap','daoduc_tacphong.diem as daoduc','daoduc_tacphong.diemtru as trudaoduc','daoduc_tacphong.solantru as sldaoduc','vanthemi.diem as vanthe','vanthemi.diemtru as truvanthe','vanthemi.solantru as slvanthe','hoatdongkhac.diem as hoatdongkhac','hoatdongkhac.diemtru as truhoatdongkhac','hoatdongkhac.solantru as slhoatdongkhac','hoatdongkhac.diemcong as diemconghoatdong','hoatdongkhac.solancong as solanconghoatdong')->get();
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
        $diem = Diem::find($id);
        $class1=Class1::all();
        $week=Week::all();
        $hoctap = HocTap::find($diem->hoctap_id);
        $vanthe = VanThe::find($diem->vanthemi_id);
        $daoduc = DaoDuc::find($diem->daoduc_id);
        $hoatdongkhac = HoatDongKhac::find($diem->hoatdongkhac_id);

        $viewData=[
            'diem' => $diem,
            'class1' => $class1,
            'week' => $week,
            'hoctap' => $hoctap,
            'vanthe' => $vanthe,
            'daoduc' => $daoduc,
            'hoatdongkhac' => $hoatdongkhac,
        ];
        return view('admin::diem.update',$viewData);
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

            $hoctapId= new HocTap();
            if($id) $hoctapId= HocTap::find($diem->hoctap_id);
            $hoctapId->tongdiem = $request->hoctap;
            $hoctapId->diemtru = $request->truhoctap;
            $hoctapId->solantru = $request->slhoctap;
            $hoctapId->diem = $hoctapId->tongdiem - $hoctapId->solantru*$hoctapId->diemtru;
            $hoctapId->save();

            $vantheId= new VanThe();
            if($id) $vantheId= VanThe::find($diem->vanthemi_id);
            $vantheId->tongdiem = $request->vanthe;
            $vantheId->diemtru = $request->truvanthe;
            $vantheId->solantru = $request->slvanthe;
            $vantheId->diem = $vantheId->tongdiem - $vantheId->solantru*$vantheId->diemtru;
            $vantheId->save();

            $daoducId= new DaoDuc();
            if($id) $daoducId= DaoDuc::find($diem->daoduc_id);
            $daoducId->tongdiem = $request->daoduc;
            $daoducId->diemtru = $request->trudaoduc;
            $daoducId->solantru = $request->sldaoduc;
            $daoducId->diem = $daoducId->tongdiem - $daoducId->solantru*$daoducId->diemtru;
            $daoducId->save();

            $hoatdongkhacId= new HoatDongKhac();
            if($id) $hoatdongkhacId= HoatDongKhac::find($diem->hoatdongkhac_id);
            $hoatdongkhacId->tongdiem = $request->hoatdongkhac;
            $hoatdongkhacId->diemtru = $request->truhoatdongkhac;
            $hoatdongkhacId->solantru = $request->slhoatdongkhac;
            $hoatdongkhacId->diem = $hoatdongkhacId->tongdiem - $hoatdongkhacId->solantru*$hoatdongkhacId->diemtru;
            $hoatdongkhacId->save();

 
        $diem->tuan_id = $request->tuan_id;
        $diem->lop_id = $request->lop_id;
        $diem->hoctap_id = $hoctapId->id;
        $diem->vanthemi_id = $vantheId->id;
        $diem->daoduc_id = $daoducId->id;
        $diem->hoatdongkhac_id = $hoatdongkhacId->id;
        $diem->save();

    }
    public function destroy($id)
    {
        $diem= Diem::find($id);
            $hoctapId= HocTap::find($diem->hoctap_id);
            $hoctapId->delete();
            $hoctapId->save();

            $vantheId= VanThe::find($diem->vanthemi_id);
            $vantheId->delete();
            $vantheId->save();

            $daoducId= DaoDuc::find($diem->daoduc_id);
            $daoducId->delete();
            $daoducId->save();

            $hoatdongkhacId= HoatDongKhac::find($diem->hoatdongkhac_id);
            $hoatdongkhacId->delete();
            $hoatdongkhacId->save();

        $diem->delete();
        $diem->save();

        return redirect()->back()->with('success','Xóa thành công');
    }
    
}
