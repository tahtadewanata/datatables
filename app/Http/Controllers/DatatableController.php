<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\tb_usiasekolah;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = tb_usiasekolah::all();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('jklksds', function ($item) {
                    $item1 = $item->jk_lk_sds;
                    return $item1;
                })
                ->addColumn('jkprsds', function ($item) {
                    $item2 = $item->jk_pr_smps;
                    return $item2;
                })
                ->addColumn('sum', function ($item) {
                    $sum = $item->jk_lk_sds + $item->jk_pr_smps;
                    return $sum;
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.datatables.index');
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
}
