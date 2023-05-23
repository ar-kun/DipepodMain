<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        return view('umkm.index', [
            'title' => 'UMKM',
            'umkm' => Umkm::latest()->filter(request(['searchUmkm', 'category']))->paginate(12)->withQueryString()
        ]);
    }

    public function show(Umkm $umkm)
    {
        return view('umkm.show', [
            'title' => 'UMKM',
            'umkm' => $umkm
        ]);
    }
}
