<?php

namespace App\Http\Controllers;

use App\Models\Sidang;
use Illuminate\Http\Request;

class SidangController extends Controller
{
    public function index()
    {
        $sidang = Sidang::with(['perkara', 'hakim', 'agendaSidang', 'putusan'])->paginate(10);

        /* var_dump($sidang); */
        return view('admin.sidang.index', compact('sidang'));
    }

    public function show($id)
    {
        $sidang = Sidang::with(['perkara', 'hakim', 'agendaSidang', 'putusan'])->where('id', '=', $id)->firstOrFail();

        /* var_dump($sidang); */
        return view('admin.sidang.show', compact('sidang'));
    }
}
