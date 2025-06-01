<?php

namespace App\Http\Controllers;

use App\Models\Hakim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HakimController extends Controller
{
    public function index()
    {
        $hakim = DB::table('table_hakim')->paginate(10);
        /* $hakim = Hakim::all(); */
        return view('admin.hakim.index', ['hakim' => $hakim]);
    }
}
