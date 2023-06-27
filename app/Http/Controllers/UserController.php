<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // User::create($input);
        $users = User::create([
            'name'     => $request->nama,
            'email'     => $request->email,
            'password'   => bcrypt($request->password)
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $users
        ]);
        // return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, User $users)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return     response()->json($validator->errors(), 422);
        }

        //update user
        $users->update([
            'name'     => $request->nama,
            'email'     => $request->email,
            'password'   => bcrypt($request->password)
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data User Berhasil Di update!',
            'data'    => $users
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
