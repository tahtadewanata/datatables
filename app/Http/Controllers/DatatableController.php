<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Sdswasta;


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

        if (!$request->filled('tahun')) {
            $data = Kecamatan::with('siswa');
        }

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kecamatan', function ($item) {
                    return $item->nama_kecamatan;
                })
                ->addColumn('jk_l', function ($item) {
                    return $sds = Sdswasta::sum('jk_lk'); 
                    //  $item->countjk('L');
                    // ini apa? ini buat di halaman adminnya mas
                })
                ->addColumn('jk_p', function ($item) {
                    return $item->countjk('P');
                })
                ->addColumn('sum', function ($item) {
                    $sum = $item->countjk('L') + $item->countjk('P');
                    $item->sum = $sum;
                    return $sum;
                })
                ->addColumn('pr_l', function ($item) {
                    if ($item->sum != 0) {
                        $result = number_format(($item->countjk('L') / $item->sum) * 100, 2);
                    } else {
                        $result = "0";
                    }
                    
                    return $result;
                })
                ->addColumn('pr_p', function ($item) {
                    if ($item->sum != 0) {
                        $result = number_format(($item->countjk('P') / $item->sum) * 100, 2);
                    } else {
                        $result = "0";
                    }
                    
                    return $result;                })
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })
                ->rawColumns(['actions'])
                ->filter(function ($query) use ($request) {
                    if ($request->filled('search.value')) {
                        $searchValue = $request->input('search.value');
                        $query->where('nama_kecamatan', 'like', '%' . $searchValue . '%');
                    }
                })
                ->make(true);
        }

        return view('admin.datatables.index');
    }

    public function getExport(Request $request)
    {

        if ($request->tahun != null) {

            // Jika parameter 'tahun' diberikan pada request, maka hanya data kecamatan dengan tahun tersebut yang diambil.
            $data = Kecamatan::with('siswa')->where('tahun', $request->tahun)->get();
        } else {

            // Jika parameter 'tahun' tidak diberikan pada request, maka ambil semua data kecamatan.
            $data = Kecamatan::with('siswa')->get();
        }

        // File yang di unduh akan bernama data.csv
        $filename = 'data.csv';

        // Header dengan tipe csv, ini adalah untuk mengunduh data
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=' . $filename,
        ];

        // Callback untuk mengembalikan data
        $callback = function () use ($data) {

            // Membuat file
            $file = fopen('php://output', 'w');

            // Menggunakan fitur fputcsv untuk membuat CSV pada PHP.
            fputcsv($file, ['Kecamatan', 'Jumlah Laki-laki', 'Jumlah Perempuan', 'Total', 'Persentase Laki-laki', 'Persentase Perempuan']);

            // Menggunakan foreach untuk mengambil data kecamatan dan jumlah siswa pada setiap kecamatan
            foreach ($data as $item) {
                fputcsv($file, [
                    $item->nama_kecamatan,
                    $item->countjk('L'),
                    $item->countjk('P'),
                    $item->countjk('L') + $item->countjk('P'),

                    // Menghitung persentase
                    number_format(($item->countjk('L') / ($item->countjk('L') + $item->countjk('P'))) * 100, 2),
                    number_format(($item->countjk('P') / ($item->countjk('L') + $item->countjk('P'))) * 100, 2),
                ]);
            }

            // Menutup file
            fclose($file);
        };

        // Mengembalikan file CSV dalam bentuk HTTP response.
        return Response::stream($callback, 200, $headers);
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
