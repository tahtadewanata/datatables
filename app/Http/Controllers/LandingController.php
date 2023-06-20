<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opd;
use Yajra\DataTables\DataTables;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('landing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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

    public function getTotalusiasekolah()
    {
        $data = Opd::all();
        return Datatables::of($data)
            ->addColumn('jk_lk_sds', function ($item) {
                $item1 = $item->tb_usiasekolah?->jk_lk_sds;
                return $item1;
            })
            ->addColumn('jk_pr_sds', function ($item) {
                $item2 = $item->tb_usiasekolah?->jk_pr_smps;
                return $item2;
            })
            ->addColumn('sum', function ($item) {
                $sum = $item->tb_usiasekolah?->jk_lk_sds + $item->tb_usiasekolah?->jk_pr_smps;
                return $sum;
            })
            ->addIndexColumn()
            ->make(true);
        // Dengan Query Builder

        // $data = DB::table('opd')
        //     ->join('tb_usiasekolah', 'opd.id', '=', 'tb_usiasekolah.id_uker')
        //     ->select('opd.*', 'tb_usiasekolah.*', DB::raw('SUM(tb_usiasekolah.jk_lk_sds + tb_usiasekolah.->jk_pr_smps) as sum'))
        //     ->groupBy('opd.id', 'tb_usiasekolah.id')
        //     ->get();

        // return Datatables::of($data)
        //     ->addIndexColumn()
        //     ->make(true);
    }
}
