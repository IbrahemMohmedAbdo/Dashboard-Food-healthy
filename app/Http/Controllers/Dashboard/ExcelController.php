<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\PlansExport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    public function exportuser()
    {
       //return Excel::download(new UsersExport, 'users.xlsx');
     return Excel::download(new UsersExport, 'users.pdf');

    }
    public function exportplan()
    {
       //return Excel::download(new UsersExport, 'users.xlsx');
     return Excel::download(new PlansExport, 'plans.pdf');

    }
}
