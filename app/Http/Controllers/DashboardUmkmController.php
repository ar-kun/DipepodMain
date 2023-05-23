<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\UmkmCategory;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

use Illuminate\Support\Facades\Storage;

class DashboardUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.umkm.index', [
            'umkms' => Umkm::paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.umkm.create', [
            'categories' => UmkmCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:umkms',
            'nama_product' => 'required|max:255|min:3',
            'nama_penjual' => 'required|max:255|min:3',
            'alamat_penjual' => 'required|min:10',
            'alamat_penjual' => 'required|min:10',
            'category_id' => 'required',
            'image' => 'required|image|file|max:4096',
            'contact' => 'required|min:10',
            'harga_minimum' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('umkm-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Umkm::create($validatedData);

        return redirect('/dashboard')->with('success', 'Produk Berhasil Diajukan - Harap tunggu respon dari admin!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Umkm $umkm)
    {
        return view('dashboard.umkm.show', [
            'umkm' => $umkm
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Umkm $umkm)
    {
        $this->authorize('admin');
        return view('dashboard.umkm.edit', [
            'umkm' => $umkm,
            'categories' => UmkmCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umkm $umkm)
    {

        $this->authorize('admin');

        $booleanValue = filter_var($request->persetujuan, FILTER_VALIDATE_BOOLEAN);

        Umkm::where('id', $umkm->id)->update(['persetujuan' => $booleanValue]);

        return redirect('/dashboard/umkm')->with('success', 'Produk Berhasil Disetujui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umkm $umkm)
    {
        //
    }

    public function pengajuan()
    {
        $this->authorize('admin');
        return view('dashboard.umkm.pengajuan', [
            'umkms' => Umkm::all()
        ]);
    }

    public function checkSlug(Request $request)
    {
        // $slug = slugify($request->title);
        $slug = SlugService::createSlug(Umkm::class, 'slug', $request->nama_product);

        return response()->json(['slug' => $slug]);
    }
}
