<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestClass;
use App\Models\Class1;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class AdminClassController extends Controller
{
    public function index()
    {
        $class= Class1::select('id','ten','khoi','tengiaovien','siso')->get();
        $viewData=[
            'class'=>$class
        ];
        return view('admin::class.index',$viewData);
    }
    public function create()
    {
        return view('admin::class.create');
    }
    public function store(RequestClass $requestClass)
    {
        $this->insertOrUpdate($requestClass);
        return redirect()->back()->with('success','Thêm mới thành công');
    }
    public function edit($id)
    {
        $class = Class1::find($id);
        return view('admin::class.update',compact('class'));
    }
    public function update(RequestClass $requestClass,$id)
    {
        $this->insertOrUpdate($requestClass,$id);
        return redirect()->back()->with('success','Cập nhật thành công');
    }
    public function insertOrUpdate($requestClass,$id='')
    {
            $class = new Class1();
            if($id) $class= Class1::find($id);
            $class->ten = $requestClass->ten;
            $class->khoi = $requestClass->khoi;
            $class->tengiaovien = $requestClass->tengiaovien ;
            $class->siso =$requestClass->siso;
            $class->save();
    }
    public function action($action,$id)
    {
        if($action)
        {
            $class = Class1::find($id);
            switch ($action)
            {
                case 'delete':
                    $class->delete();
                    $messages = 'Xoá thành công';
                    break;
            }
        }
        return redirect()->back()->with('success',$messages);
    }
}
