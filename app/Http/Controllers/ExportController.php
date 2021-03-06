<?php

namespace App\Http\Controllers;

use App\Exports\TestExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export() 
    {
        return Excel::download(new TestExport, 'BangDiem.xlsx');
    }
}
