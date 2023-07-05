<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataklasifikasi;
use Yajra\DataTables\DataTables;

class DatadasarController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'title' => 'Data Dasar | SIDANDA',
        ];
        return view('landing.pages.data_dasar', $data);
    }

    public function getDatadasar()
    {
        //
        $judul = [
            'title' => 'Data Dasar | SIDANDA',
        ];
        if (request()->ajax()) {
            $dataklasifikasi = Dataklasifikasi::where('klasifikasi','DASAR')->get(); //eloquent where clause. src: https://techvblogs.com/blog/laravel-multiple-where-condition-example
            return DataTables::of($dataklasifikasi)
                ->addIndexColumn()
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        return view('landing.pages.data_dasar', $judul);
    }
}
