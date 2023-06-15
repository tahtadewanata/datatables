<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_usiasekolah;
use App\Models\Opd;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;


class TotalusiasekolahController extends Controller
{
    public function index()
    {
        return view('visitors.page.totalusiasekolah');
    }

    public function getTotalusiasekolah(Request $request)
    {
        if ($request->ajax()) {
            $data = Opd::with('tb_usiasekolah')->get();
            // $data->transform(function ($item) {
            //     $item['sum'] = $item->tb_usiasekolah->jk_lk_sds + $item->jk_pr_smps;
            //     return $item;
            // });
            return Datatables::of($data)
                ->addColumn('sum', function ($item) {
                    dd($item); // Debug the $item variable
                    return $item->jk_lk_smps + $item->jk_pr_smps;
                })
                ->addIndexColumn()
                ->make(true);
        }
    }
}
