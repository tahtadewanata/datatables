<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Kelahiran;
use App\Models\Imunisasi;


class KesehatanController extends Controller
{
    public function getKelahiranbayi(Request $request)
    {
        //
        $judul = [
            'title' => 'Data Kelahiran Bayi',
            'desc' => 'Kelahiran menurut jenis kelamin dan Kecamatan di Kabupaten Nganjuk'
        ];

        $data = Kelahiran::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Kelahiran::get();
            // $data = Kecamatan::leftJoin('sdswasta','sdswasta.kecamatan_id', '=', 'kecamatan.id'); //kalau begini kayaknya bisa mas
            // $data->whereYear('tahun', $request->tahun);
        }

        if ($request->ajax()) {
            // Jika permintaan adalah permintaan AJAX
            // Maka akan return DataTable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kecamatan', function ($item) {
                    // Mengembalikan nama kecamatan pada baris tabel.
                    return $item->kecamatan->nama_kecamatan;
                })
                ->addColumn('jk_lk', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'L' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */
                    return $item->jk_lk;

                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_lk'];
                    // }
                    // return null;
                })

                ->addColumn('jk_pr', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'P' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */

                    return $item->jk_pr;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_pr'];
                    // }
                    // return null;
                })

                ->addColumn('sum', function ($item) {
                    // Menghitung jumlah dari hitungan 'L' dan 'P'.
                    // Mengatur jumlah tersebut ke dalam item.
                    // $sum = $item->sumjk;
                    // Mengembalikan jumlah tersebut.
                    // return $sum;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     $sum = $sdswasta['jk_lk'] + $sdswasta['jk_pr'];
                    //     return $sum;
                    // }
                    $sum = $item->jk_lk + $item->jk_pr;
                    return $sum;
                })
                ->addColumn('pr_l', function ($item) {
                    /**
                     * Menghitung persentase item dengan flag 'L' dari total jumlah item,
                     * dan mengembalikan persentase tersebut dalam bentuk string dengan 2 angka desimal.
                     */
                    // return number_format(($item->countjkswasta('L') / $item->sum) * 100, 2);
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     $sum = $sdswasta['jk_lk'] + $sdswasta['jk_pr'];
                    //     $percentage = number_format($sdswasta['jk_lk'] / $sum * 100, 2);
                    //     return $percentage;
                    // }
                    // return null;
                    $sum = $item->jk_lk + $item->jk_pr;
                    // $percentage = number_format($item->jk_lk / $sum * 100, 2);
                    $percentage = number_format(
                        $sum == 0
                            ? 0
                            : $item->jk_lk * 100 / $sum,
                        2
                    );
                    return $percentage;
                })

                ->addColumn('pr_p', function ($item) {
                    /**
                     * Menghitung persentase item dengan flag 'P' dari total jumlah item,
                     * dan mengembalikan persentase tersebut dalam bentuk string dengan 2 angka desimal.
                     */
                    // return number_format(($item->countjkswasta('P') / $item->sum) * 100, 2);
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     $sum = $sdswasta['jk_lk'] + $sdswasta['jk_pr'];
                    //     $percentage = number_format($sdswasta['jk_pr'] / $sum * 100, 2);
                    //     return $percentage;
                    // }
                    // return null;
                    $sum = $item->jk_lk + $item->jk_pr;
                    $percentage = number_format(
                        $sum == 0
                            ? 0
                            : $item->jk_pr * 100 / $sum,
                        2
                    );
                    return $percentage;
                })

                // Menambahkan kolom 'actions'
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })

                // Mengembalikan kolom 'actions'
                ->rawColumns(['actions'])
                ->filter(function ($query) use ($request) {
                    /**
                     * Jika parameter 'search.value' diberikan pada request, maka filter data kecamatan berdasarkan nama kecamatan yang mengandung string tersebut.
                     */
                    if ($request->filled('search.value')) {
                        $searchValue = $request->input('search.value');
                        $query->where('nama_kecamatan', 'like', '%' . $searchValue . '%');
                    }
                })
                ->make(true);
        }

        return view('landing.pages.kelahiranbayi', $judul);
    }

    public function getImunisasi(Request $request)
    {
        //
        $judul = [
            'title' => 'Data Penduduk Usia Sekolah',
            'desc' => 'Penduduk Usia Sekolah Dasar Negeri (7 - 12 tahun) Berdasarkan Jenis Kelamin dan Kecamatan Kabupaten Nganjuk Tahun 2021'
        ];

        $data = Imunisasi::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Imunisasi::get();
            // $data = Kecamatan::leftJoin('sdswasta','sdswasta.kecamatan_id', '=', 'kecamatan.id'); //kalau begini kayaknya bisa mas
            // $data->whereYear('tahun', $request->tahun);
        }

        if ($request->ajax()) {
            // Jika permintaan adalah permintaan AJAX
            // Maka akan return DataTable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kecamatan', function ($item) {
                    // Mengembalikan nama kecamatan pada baris tabel.
                    return $item->kecamatan->nama_kecamatan;
                })
                ->addColumn('jk_lk', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'L' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */
                    return $item->jk_lk;

                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_lk'];
                    // }
                    // return null;
                })

                ->addColumn('jk_pr', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'P' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */

                    return $item->jk_pr;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_pr'];
                    // }
                    // return null;
                })

                ->addColumn('sum', function ($item) {
                    // Menghitung jumlah dari hitungan 'L' dan 'P'.
                    // Mengatur jumlah tersebut ke dalam item.
                    // $sum = $item->sumjk;
                    // Mengembalikan jumlah tersebut.
                    // return $sum;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     $sum = $sdswasta['jk_lk'] + $sdswasta['jk_pr'];
                    //     return $sum;
                    // }
                    $sum = $item->jk_lk + $item->jk_pr;
                    return $sum;
                })
                ->addColumn('pr_l', function ($item) {
                    /**
                     * Menghitung persentase item dengan flag 'L' dari total jumlah item,
                     * dan mengembalikan persentase tersebut dalam bentuk string dengan 2 angka desimal.
                     */
                    // return number_format(($item->countjkswasta('L') / $item->sum) * 100, 2);
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     $sum = $sdswasta['jk_lk'] + $sdswasta['jk_pr'];
                    //     $percentage = number_format($sdswasta['jk_lk'] / $sum * 100, 2);
                    //     return $percentage;
                    // }
                    // return null;
                    $sum = $item->jk_lk + $item->jk_pr;
                    // $percentage = number_format($item->jk_lk / $sum * 100, 2);
                    $percentage = number_format(
                        $sum == 0
                            ? 0
                            : $item->jk_lk * 100 / $sum,
                        2
                    );
                    return $percentage;
                })

                ->addColumn('pr_p', function ($item) {
                    /**
                     * Menghitung persentase item dengan flag 'P' dari total jumlah item,
                     * dan mengembalikan persentase tersebut dalam bentuk string dengan 2 angka desimal.
                     */
                    // return number_format(($item->countjkswasta('P') / $item->sum) * 100, 2);
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     $sum = $sdswasta['jk_lk'] + $sdswasta['jk_pr'];
                    //     $percentage = number_format($sdswasta['jk_pr'] / $sum * 100, 2);
                    //     return $percentage;
                    // }
                    // return null;
                    $sum = $item->jk_lk + $item->jk_pr;
                    $percentage = number_format(
                        $sum == 0
                            ? 0
                            : $item->jk_pr * 100 / $sum,
                        2
                    );
                    return $percentage;
                })

                // Menambahkan kolom 'actions'
                ->addColumn('actions', function () {
                    return '<td><a href="#" class="btn btn-secondary">Detail</a></td>';
                })

                // Mengembalikan kolom 'actions'
                ->rawColumns(['actions'])
                ->filter(function ($query) use ($request) {
                    /**
                     * Jika parameter 'search.value' diberikan pada request, maka filter data kecamatan berdasarkan nama kecamatan yang mengandung string tersebut.
                     */
                    if ($request->filled('search.value')) {
                        $searchValue = $request->input('search.value');
                        $query->where('nama_kecamatan', 'like', '%' . $searchValue . '%');
                    }
                })
                ->make(true);
        }

        return view('landing.pages.imunisasi', $judul);
    }

    public function getChartImunisasi(Request $request)
    {
        $query = Imunisasi::query()->with('kecamatan'); // Start with a base query and eager load 'kecamatan'

        if ($request->filled('tahun')) {
            // If 'tahun' parameter is provided, filter by it
            $query->where('tahun', $request->tahun);
        }

        $data = $query->get();

        $labels = $data->pluck('kecamatan.nama_kecamatan');
        $lakiData = $data->pluck('jk_lk');
        $perempuanData = $data->pluck('jk_pr');

        return response()->json([
            'labels' => $labels,
            'data' => [
                'laki' => $lakiData,
                'perempuan' => $perempuanData
            ]
        ]);
    }
}
