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
            $dataklasifikasi = Dataklasifikasi::query();
            return DataTables::of($dataklasifikasi)

                ->make();
        }

        return view('landing.pages.data_dasar', $judul);
    }
}
