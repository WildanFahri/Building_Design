<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = User::all();
        // if ($request->ajax()) {
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function ($data) {
        //             $button = '<div class="btn-group" role="group">';
        //             $button .= '<a href="/user/' . $data->id . '/edit" class="btn btn-sm btn-info"><i class="fas fa-edit text-light"></i></a>';
        //             $button .= '<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-id="' . $data->id . '" data-bs-target="#deleteUserModal" class="btn btn-sm btn-danger btn-delete-user text-light"><i class="fas fa-trash"></i></a>';
        //             $button .= '</div>';
        //             return $button;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        // return view('admin.user.index', compact('data'));

        $data = User::all(); // Mengambil semua isi tabel
        $posts = User::orderBy('id', 'desc')->paginate(5);
        return view('admin.user.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $data = new user();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->address = $request->get('address');
        $data->phone = $request->get('phone');

        if ($data->password != Hash::make($request['password'])) {
            $data->password = Hash::make($request['password']);
        }
        $data->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('user.index')->with('success', 'User Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.edit', compact('data'));
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
        User::findOrFail($id)->update($request->only(['name', 'email', 'address', 'phone']));
        return redirect()->route('user.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
