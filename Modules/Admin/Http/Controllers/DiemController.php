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
        return view('admin::diem.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
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

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
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
        return redirect()->back()->with('success','Thêm điểm thành công');       
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::diem.update');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
