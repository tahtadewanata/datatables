<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use Yajra\DataTables\DataTables;
use App\Models\Sdswasta;
use App\Models\Sdnegeri;
use App\Models\Smpnegeri;
use App\Models\Smpswasta;
use App\Models\apk;
use App\Models\apm;
use App\Models\Sertifikasi;
use App\Models\Kejarpaket;

class UsiasekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getsdswasta(Request $request)
    {
        //
        $judul = [
            'title' => 'Data Penduduk Usia Sekolah',
            'desc' => 'Penduduk Usia Sekolah Dasar Swasta (7 - 12 tahun) Berdasarkan Jenis Kelamin dan Kecamatan Kabupaten Nganjuk Tahun 2021'
        ];

        $data = Sdswasta::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Sdswasta::get();
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

        return view('landing.pages.sdswasta', $judul);
    }

    public function getsdnegeri(Request $request)
    {
        //
        $judul = [
            'title' => 'Data Penduduk Usia Sekolah',
            'desc' => 'Penduduk Usia Sekolah Dasar Negeri (7 - 12 tahun) Berdasarkan Jenis Kelamin dan Kecamatan Kabupaten Nganjuk Tahun 2021'
        ];

        $data = Sdnegeri::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Sdnegeri::get();
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

        return view('landing.pages.sdnegeri', $judul);
    }

    public function getsmpnegeri(Request $request)
    {
        //
        $judul = [
            'title' => 'Data Penduduk Usia Sekolah',
            'desc' => 'Penduduk Usia Sekolah Tingkat SMP/MTs Negeri  (13 - 15 tahun) Berdasarkan Jenis Kelamin dan Kecamatan Kabupaten Nganjuk Tahun 2021'
        ];

        $data = Smpnegeri::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Smpnegeri::get();
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

        return view('landing.pages.smpnegeri', $judul);
    }

    public function getsmpswasta(Request $request)
    {
        //
        $judul = [
            'title' => 'Data Penduduk Usia Sekolah',
            'desc' => 'Penduduk Usia Sekolah Tingkat SMP/MTs Swasta  (13 - 15 tahun) Berdasarkan Jenis Kelamin dan Kecamatan Kabupaten Nganjuk Tahun' . $request->filled('tahun') . ''
        ];

        $data = Smpswasta::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Smpswasta::get();
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

        return view('landing.pages.smpswasta', $judul);
    }

    public function getapk(Request $request)
    {
        //
        $judul = [
            'title' => 'Angka Partisipasi Kasar (APK)',
            'desc' => 'Berdasarkan Jenis Kelamin di Kabupaten Nganjuk'
        ];

        $data = apk::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = apk::get();
            // $data = Kecamatan::leftJoin('sdswasta','sdswasta.kecamatan_id', '=', 'kecamatan.id'); //kalau begini kayaknya bisa mas
            // $data->whereYear('tahun', $request->tahun);
        }

        if ($request->ajax()) {
            // Jika permintaan adalah permintaan AJAX
            // Maka akan return DataTable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('jenjang', function ($item) {
                    // Mengembalikan nama kecamatan pada baris tabel.
                    return $item->jenjang;
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

        return view('landing.pages.apk', $judul);
    }

    public function getApm(Request $request)
    {
        //
        $judul = [
            'title' => 'Angka Partisipasi Murni (APM)',
            'desc' => 'Berdasarkan Jenis Kelamin di Kabupaten Nganjuk'
        ];

        $data = apm::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = apm::get();
            // $data = Kecamatan::leftJoin('sdswasta','sdswasta.kecamatan_id', '=', 'kecamatan.id'); //kalau begini kayaknya bisa mas
            // $data->whereYear('tahun', $request->tahun);
        }

        if ($request->ajax()) {
            // Jika permintaan adalah permintaan AJAX
            // Maka akan return DataTable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('jenjang', function ($item) {
                    // Mengembalikan nama kecamatan pada baris tabel.
                    return $item->jenjang;
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

        return view('landing.pages.apm', $judul);
    }

    public function getSertifikasi(Request $request)
    {
        //
        $judul = [
            'title' => 'Sertifikasi Guru',
            'desc' => 'Jumlah guru yang telah menerima sertifikasi guru menurut jenjang pendidikan'
        ];

        $data = Sertifikasi::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Sertifikasi::get();
            // $data = Kecamatan::leftJoin('sdswasta','sdswasta.kecamatan_id', '=', 'kecamatan.id'); //kalau begini kayaknya bisa mas
            // $data->whereYear('tahun', $request->tahun);
        }

        if ($request->ajax()) {
            // Jika permintaan adalah permintaan AJAX
            // Maka akan return DataTable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('jenjang', function ($item) {
                    // Mengembalikan nama kecamatan pada baris tabel.
                    return $item->jenjang;
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

        return view('landing.pages.sertifikasi', $judul);
    }

    public function getKejarpaket(Request $request)
    {
        //
        $judul = [
            'title' => 'Angka Kelulusan Paket A, B dan C',
            'desc' => 'Angka Kelulusan Kejar Paket menurut Jenis Kelamin'
        ];

        $data = Kejarpaket::when($request->has('tahun'), function ($kec) use ($request) {
            // Ketika parameter 'tahun' ada dalam permintaan, melakukan filtering berdasarkan tahun
            $kec->where('tahun', $request->tahun)->get();
            // $kec->where('tahun', $request->tahun);
        });

        if (!$request->filled('tahun')) {
            $data = Kejarpaket::get();
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
                    return $item->paketA_lk;

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

                    return $item->paketA_pr;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_pr'];
                    // }
                    // return null;
                })
                
                ->addColumn('B_lk', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'L' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */
                    return $item->paketB_lk;

                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_lk'];
                    // }
                    // return null;
                })

                ->addColumn('B_pr', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'P' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */

                    return $item->paketB_pr;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_pr'];
                    // }
                    // return null;
                })
                ->addColumn('C_lk', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'L' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */
                    return $item->paketC_lk;

                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_lk'];
                    // }
                    // return null;
                })

                ->addColumn('C_pr', function ($item) {
                    /**
                     * Menghitung jumlah item dengan flag 'P' pada baris tabel,
                     * dan mengembalikan jumlah tersebut.
                     */

                    return $item->paketC_pr;
                    // $sdswasta = $item['sdswasta'][0] ?? null;
                    // if ($sdswasta) {
                    //     return $sdswasta['jk_pr'];
                    // }
                    // return null;
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

        return view('landing.pages.kejarpaket', $judul);
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
