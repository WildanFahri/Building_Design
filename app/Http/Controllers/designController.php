<?php

namespace App\Http\Controllers;

use App\Models\design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class designController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = design::all(); // Mengambil semua isi tabel
        $posts = design::orderBy('id', 'desc')->paginate(5);
        return view('admin.design.index', [ 'data' => $data]);
    }

    // public function home()
    // {
    //     $data = design::all(); // Mengambil semua isi tabel
    //     $posts = design::orderBy('id', 'desc')->paginate(5);
    //     return view('home', [ 'data' => $data]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.design.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            // 'featured_image' => 'required',

        ]);
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $data = new design();
        $data->name = $request->get('name');
        $data->image = $image_name;
        $data->description = $request->get('description');
        $data->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('design.index')->with('success', 'design Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = design::find($id);
        return view('admin.design.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = design::find($id);
        return view('admin.design.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = design::find($id);

        // $data->name = $request->name;
        // $data->description = $request->description;

        // if ($data->image && file_exists(storage_path('app/public/' . $data->image))) {
        //     \Storage::delete(['public/'. $data->image]);
        // }
        // $image_name = $request->file('image')->store('images', 'public');
        // $data->image = $image_name;

        // $data->save();
        // //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return redirect()->route('design.index')->with('success', 'design Berhasil Diperbarui');


        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = design::find($id);
        if ($request->file('image') != null && $data->image && file_exists(storage_path('app/public/' . $data->image))) {
            Storage::delete(['public/'. $data->image]);
            $image_name = $request->file('image')->store('images', 'public');
        } elseif ($request->file('image') != null) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        else {
            $image_name = $data->image;
        }
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->image = $image_name;
        $data->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('design.index')->with('success', 'design Berhasil Diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        design::find($id)->delete();
        return redirect()->route('design.index')->with('success', 'Data Berhasil Dihapus');
    }
}
