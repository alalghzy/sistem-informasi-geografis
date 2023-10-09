<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get posts
        $posts = Peta::latest()->paginate(10);
        //render view with posts
        return view('admin.lamanPeta', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'     => 'required',
            'latitude'   => 'required',
            'longitude'   => 'required',
        ]);


        //create post
        Peta::create([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'latitude'   => $request->latitude,
            'longitude'   => $request->longitude,
        ]);

        //redirect to index
        return redirect()->route('peta.index')->with(['success' => 'Data Berhasil Disimpan!']);

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find post by 'id_post' or throw an exception if not found
        $post = Peta::findOrFail($id);

        // Render view with post
        return view('admin.index', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'     => 'required',
            'latitude'   => 'required',
            'longitude'   => 'required',
        ]);

        //get post by ID
        $post = Peta::findOrFail($id);

        $post->update([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'latitude'   => $request->latitude,
            'longitude'   => $request->longitude,
        ]);

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $post = Peta::findOrFail($id);


        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
