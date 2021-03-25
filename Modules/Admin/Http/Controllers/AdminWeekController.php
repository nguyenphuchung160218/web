<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestWeek;
use App\Models\Week;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class AdminWeekController extends Controller
{
    public function index()
    {
        $weeks = Week::select('id','tentuan')->get();
        $viewData=[
            'weeks'=>$weeks
        ];
        return view('admin::week.index',$viewData);
    }
    public function create()
    {
        return view('admin::week.create');
    }
    public function store(RequestWeek $requestWeek)
    {
        $this->insertOrUpdate($requestWeek);
        return redirect()->back()->with('success','Thêm mới thành công');
    }
    public function edit($id)
    {
        $weeks = Week::find($id);
        return view('admin::week.update',compact('weeks'));
    }
    public function update(RequestWeek $requestWeek,$id)
    {
        $this->insertOrUpdate($requestWeek,$id);
        return redirect()->back()->with('success','Cập nhật thành công');
    }
    public function insertOrUpdate($requestWeek,$id='')
    {
            $week = new Week();
            if($id) $week= Week::find($id);
            $week->tentuan = $requestWeek->tentuan;
            $week->save();
    }
    public function action($action,$id)
    {
        if($action)
        {
            $weeks = Week::find($id);
            switch ($action)
            {
                case 'delete':
                    $weeks->delete();
                    $messages = 'Xoá thành công';
                    break;
            }
        }
        return redirect()->back()->with('success',$messages);
    }
}
