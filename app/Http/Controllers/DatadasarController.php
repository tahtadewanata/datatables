<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataklasifikasi;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;


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
            // $dataklasifikasi = Dataklasifikasi::where('klasifikasi', 'DASAR')->get(); //eloquent where clause. src: https://techvblogs.com/blog/laravel-multiple-where-condition-example
            // return DataTables::of($dataklasifikasi)
            //     ->addIndexColumn()
            // ->addColumn('actions', function () {
            //     return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
            // })
            // ->rawColumns(['actions'])
            //     ->make();

            // $dataKlasifikasi = DataKlasifikasi::with('klasifikasi', 'bidang')->get();
            // return Datatables::of($dataKlasifikasi)
            // ->addIndexColumn()
            // ->addColumn('actions', function () {
            //     return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
            // })
            // ->rawColumns(['actions'])
            // ->make(true);
            $dataKlasifikasi =  DataKlasifikasi::with('klasifikasi', 'bidang')
                // ->where('id_klasifikasi', 1)
                ->whereHas('klasifikasi', function ($query) {
                    $query->where('namaklasifikasi', 'DASAR');
                }) // PAKAI INI KETIKA AMBIL WHERE CLAUSE DARI TABEL JOIN
                ->get();

            return datatables()->of($dataKlasifikasi)
                ->addIndexColumn()
                ->addColumn('data', function ($row) {
                    return $row->namadata;
                })
                // ->addColumn('klasifikasi', function ($row) {
                //     return $row->klasifikasi->namaklasifikasi;
                // })
                // ->addColumn('bidang', function ($row) {
                //     return $row->bidang->namabidang;
                // })
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })
                ->rawColumns(['actions'])
                ->make(true);

            // Dengan Query Builder
            // $data = DB::table('dataklasifikasi')
            //     ->join('bidang', 'dataklasifikasi.id_bidang', '=', 'bidang.id')
            //     ->join('klasifikasi', 'dataklasifikasi.id_klasifikasi', '=', 'klasifikasi.id')
            //     ->select('dataklasifikasi.*', 'bidang.namabidang', 'klasifikasi.namaklasifikasi')
            //     ->where('dataklasifikasi.id_klasifikasi', '=', 3)
            //     ->get();
            // return Datatables::of($data)
            //     ->addIndexColumn()
            // ->addColumn('actions', function () {
            //     return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
            // })
            // ->rawColumns(['actions'])
            //     ->make(true);
        }

        return view('landing.pages.data_dasar', $judul);
    }
}
