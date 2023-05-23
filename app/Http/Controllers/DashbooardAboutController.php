<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashbooardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.about.index', [
            'about' => About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:abouts',
            'nama_lengkap' => 'required|max:255|min:3',
            'tanggal_lahir' => 'required|max:255|min:3',
            'alamat' => 'required|max:255|min:3',
            'image' => 'required|image|file|max:5096',
            'jabaran' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('perangkat-images');
        }


        About::create($validatedData);
        return redirect('/dashboard/about')->with('success', 'Perangkat Baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('dashboard.about.edit', [
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        $rules = [
            'nama_lengkap' => 'required|max:255|min:3',
            'tanggal_lahir' => 'required|max:255|min:3',
            'alamat' => 'required|max:255|min:3',
            'jabaran' => 'required',
        ];

        if ($request->slug != $about->slug) {
            $rules['slug'] = 'required|unique:abouts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('perangkat-images');
        }

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        About::where('id', $about->id)->update($validatedData);

        return redirect('/dashboard/about')->with('success', 'Post has been updeted!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::delete($about->image);
        }
        About::destroy($about->id);

        return redirect('/dashboard/about')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        // $slug = slugify($request->title);
        $slug = SlugService::createSlug(About::class, 'slug', $request->nama_lengkap);

        return response()->json(['slug' => $slug]);
    }
}
