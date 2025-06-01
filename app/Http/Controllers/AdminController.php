<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('users')->count();
        $data['sidang'] = DB::table('table_sidang')->count();
        $data['hakim'] = DB::table('table_hakim')->count();

        return view('admin.dashboard', $data);
    }
}
