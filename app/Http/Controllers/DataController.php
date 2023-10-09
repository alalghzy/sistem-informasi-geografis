<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //get posts
        $posts = Post::latest()->get();

        return view('admin.lamanTabel', compact('posts'));
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
    $validator = Validator::make($request->all(), [
        'nama'      => 'required|min:5',
        'deskripsi' => 'required|min:5',
        'latitude'  => 'required|min:5',
        'longitude' => 'required|min:5',
    ]);

    if ($validator->fails()) {
        return back()
            ->with('failed', 'Data gagal ditambahkan!')
            ->withInput()
            ->withErrors($validator);
    }

    // Cek jika latitude dan longitude sama
    $existingPost = Post::where('latitude', $request->latitude)
        ->where('longitude', $request->longitude)
        ->first();

    if ($existingPost) {
        return back()
            ->with('failed', 'Data koordinat sudah ada!')
            ->withInput();
    }

    // Create post
    Post::create([
        'nama'       => $request->nama,
        'deskripsi'  => $request->deskripsi,
        'latitude'   => $request->latitude,
        'longitude'  => $request->longitude,
    ]);

    // Redirect to index
    return back()->with('message', 'Data berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find post by 'id_post' or throw an exception if not found
        $post = Post::findOrFail($id);

        // Render view with post
        return view('admin.lamanTabel', compact('post'));
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
        $post = Post::findOrFail($id);

        $post->update([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'latitude'   => $request->latitude,
            'longitude'   => $request->longitude,
        ]);

        //redirect to index
        return redirect()->route('tabel.index')->with('message', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $post = Post::findOrFail($id);


        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('tabel.index')->with('message','Data berhasil dihapus!');
    }

    // public function multipleDelete(Request $request)
    // {
    //     $ids = $request->ids;
    //     Post::whereIn('id_post', explode(",", $ids))->delete();

    //     return response()->json(['status' => true, 'message' => 'Data berhasil disimpan!']);
    // }
}
