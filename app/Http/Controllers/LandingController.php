<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
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

    public function chartTable(Request $request)
    {
        //
        $data = Kecamatan::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            // Jika parameter 'tahun' tidak ada atau kosong dalam permintaan, mengambil semua data kecamatan dengan relasi siswa
            $data = Kecamatan::with('siswa');
        }

        if ($request->ajax()) {
            // Jika permintaan adalah permintaan AJAX
            // Maka akan return DataTable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kecamatan', function ($item) {

                    // Mengembalikan nama kecamatan pada baris tabel.
                    return $item->nama_kecamatan;
                })
                ->addColumn('jk_l', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'L' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */
                    return $item->countjk('L');
                })

                ->addColumn('jk_p', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'P' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */
                    return $item->countjk('P');
                })

                ->addColumn('sum', function ($item) {
                    // Menghitung jumlah dari hitungan 'L' dan 'P'.
                    $sum =  $item->countjk('L') +  $item->countjk('P');
                    // Mengatur jumlah tersebut ke dalam item.
                    $item->sum = $sum;
                    // Mengembalikan jumlah tersebut.
                    return $sum;
                })
                ->addColumn('pr_l', function ($item) {
                    /**
                     * Menghitung persentase item dengan flag 'L' dari total jumlah item,
                     * dan mengembalikan persentase tersebut dalam bentuk string dengan 2 angka desimal.
                     */
                    return number_format(($item->countjk('L') / $item->sum) * 100, 2);
                })

                ->addColumn('pr_p', function ($item) {
                    /**
                     * Menghitung persentase item dengan flag 'P' dari total jumlah item,
                     * dan mengembalikan persentase tersebut dalam bentuk string dengan 2 angka desimal.
                     */
                    return number_format(($item->countjk('P') / $item->sum) * 100, 2);
                })

                // Menambahkan kolom 'actions'
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })

                // Mengembalikan kolom 'actions'
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('landing.pages.chart_table');
    }

    public function getChartLanding(Request $request)
    {
        $data = Kecamatan::with('siswa')
            ->when($request->has('tahun'), function ($kec) use ($request) {
                // Jika parameter 'tahun' diberikan pada request, maka hanya data kecamatan dengan tahun tersebut yang diambil.
                $kec->where('tahun', $request->tahun);
            })->get();

        if (!$request->filled('tahun')) {

            // Jika parameter 'tahun' tidak diberikan pada request, maka ambil semua data kecamatan.
            $data = Kecamatan::with('siswa')->get();
        }

        $labels = $data->pluck('nama_kecamatan');
        $lakiData = $data->pluck('siswa')->map(function ($siswa) {

            // Menghitung jumlah siswa laki-laki pada setiap kecamatan.
            return $siswa->where('jk', 'L')->count();
        });
        $perempuanData = $data->pluck('siswa')->map(function ($siswa) {

            // Menghitung jumlah siswa perempuan pada setiap kecamatan.
            return $siswa->where('jk', 'P')->count();
        });

        return response()->json([
            /**
             * Mengembalikan data dalam bentuk JSON dengan format:
             * {
             *     "labels": ["kecamatan1", "kecamatan2", ...],
             *     "data": {
             *         "laki": [jumlah_laki_kec1, jumlah_laki_kec2, ...],
             *         "perempuan": [jumlah_perempuan_kec1, jumlah_perempuan_kec2, ...]
             *     }
             * }
             */
            'labels' => $labels,
            'data' => [
                'laki' => $lakiData,
                'perempuan' => $perempuanData
            ]
        ]);
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
