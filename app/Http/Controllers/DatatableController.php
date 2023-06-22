<?php

namespace App\Http\Controllers;

use App\DataTables\MydataDataTable;
use App\Models\Kecamatan;
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
        $data = Kecamatan::when($request->has('tahun'), function ($kec) use ($request) {
            $kec->where('tahun', $request->tahun);
        });

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kecamatan', function ($item) {
                    return $item->nama_kecamatan;
                })
                ->addColumn('jk_l', function ($item) {
                    return $item->countjk('L');
                })
                ->addColumn('jk_p', function ($item) {
                    return $item->countjk('P');
                })
                ->addColumn('sum', function ($item) {
                    $sum =  $item->countjk('L') +  $item->countjk('P');
                    $item->sum = $sum;
                    return $sum;
                })
                ->addColumn('pr_l', function ($item) {
                    return number_format(($item->countjk('L') / $item->sum) * 100, 2);
                })
                ->addColumn('pr_p', function ($item) {
                    return number_format(($item->countjk('P') / $item->sum) * 100, 2);
                })
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })
                ->rawColumns(['actions'])
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
