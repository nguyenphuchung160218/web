<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin::user.index',compact('users'));
    }
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        $user->save();
        return redirect()->back()->with('success','Xóa thành công');
    }
}
