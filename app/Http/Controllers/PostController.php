<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //get posts
        $posts = Post::count();
        return view('admin.dashboard', compact('posts'))->with('success','Kamu berhasil Login!');
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
        Post::create([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'latitude'   => $request->latitude,
            'longitude'   => $request->longitude,
        ]);

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Disimpan!']);

        // dd($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $post = Post::findOrFail($id);

        // //render view with post
        // return view('admin.ModalData', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find post by 'id_post' or throw an exception if not found
        $post = Post::findOrFail($id);

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
        $post = Post::findOrFail($id);

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
    public function destroy(Request $request)
    {
        $ids = $request->ids;
    $deletedRows = Post::whereIn('id_post', explode(",", $ids))->delete();

    if ($deletedRows > 0) {
        return response()->json(['status' => true, 'message' => 'Data berhasil dihapus!']);
    } else {
        return response()->json(['status' => false, 'message' => 'Data tidak ditemukan atau gagal dihapus.']);
    }

    }
}
