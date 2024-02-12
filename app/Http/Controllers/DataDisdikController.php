<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Sdnegeri;
use App\Models\Sdswasta;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class DataDisdikController extends Controller
{
    public function index()
    {
        return view('admin.data_disdik.index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('import_file')) {
            $file = $request->file('import_file');
            $reader = IOFactory::load($file);
            // Specify the sheet name you want to read
            $sheetSdNegeri = 'sd_negeri'; // Change to the desired sheet name
            // Get the worksheet by name
            $worksheetSdNegeri = $reader->getSheetByName($sheetSdNegeri);

            $no = 0;
            if ($worksheetSdNegeri) {
                $dataSdNegeri = $worksheetSdNegeri->toArray();
                $headersSdNegeri = $dataSdNegeri[3]; // Assuming headers are in the 4th row
                // nama_kecamatan
                foreach ($dataSdNegeri as $key => $value) {
                    if ($key > 3) {
                        // keacamta row
                        $kecamatanRow = Kecamatan::where('nama_kecamatan', $value[0])->first();
                        // cek sudah ada data dengan kecamatan dan tahun pada table sdnegeri
                        $sdNgeriRow = Sdnegeri::where('kecamatan_id', $kecamatanRow->id)->where('tahun', $value[3])->first();
                        // dd($sdNgeriRow);

                        if ($sdNgeriRow) {
                            // update  Sdnegeri
                            $sdNgeriRow->kecamatan_id = $kecamatanRow->id;
                            $sdNgeriRow->jk_lk = $value[1];
                            $sdNgeriRow->jk_pr = $value[2];
                            $sdNgeriRow->tahun = $value[3];
                            $sdNgeriRow->save();
                        } else {
                            // insert Sdnegeri
                            // init Sdnegeri
                            $insertSdNegeri = new Sdnegeri();
                            $insertSdNegeri->kecamatan_id = $kecamatanRow->id;
                            $insertSdNegeri->jk_lk = $value[1];
                            $insertSdNegeri->jk_pr = $value[2];
                            $insertSdNegeri->tahun = $value[3];
                            $insertSdNegeri->save();
                        }

                        $no++;
                    }
                }
            } else {

                // untk SD Swasta
                $sheetSdSwasta = 'sd_swasta'; // Change to the desired sheet name
                // Get the worksheet by name
                $worksheetSdSwasta = $reader->getSheetByName($sheetSdSwasta);
                if ($worksheetSdSwasta) {
                    $dataSqSwasta = $worksheetSdSwasta->toArray();
                    // nama_kecamatan
                    foreach ($dataSqSwasta as $keyy => $val) {
                        if ($keyy > 0) {
                            // keacamta row
                            $kecamatanRow = Kecamatan::where('nama_kecamatan', $val[0])->first();
                            // cek sudah ada data dengan kecamatan dan tahun pada table Sdswasta
                            $sdSwastaRow = Sdswasta::where('kecamatan_id', $kecamatanRow->id)->where('tahun', $val[3])->first();
                            if ($sdSwastaRow) {
                                // update  Sdswasta
                                $sdSwastaRow->kecamatan_id = $kecamatanRow->id;
                                $sdSwastaRow->jk_lk = $val[1];
                                $sdSwastaRow->jk_pr = $val[2];
                                $sdSwastaRow->tahun = $val[3];
                                $sdSwastaRow->save();
                            } else {
                                // init Sdswasta
                                $insertSdSwasta = new Sdswasta();
                                $insertSdSwasta->kecamatan_id = $kecamatanRow->id;
                                $insertSdSwasta->jk_lk = $val[1];
                                $insertSdSwasta->jk_pr = $val[2];
                                $insertSdSwasta->tahun = $val[3];
                                $insertSdSwasta->save();
                            }
                            $no++;
                        }
                    }
                }
            }

            $respon['status'] = true;
            $respon['pesan'] = "Berhasil update sebanyak $no";
            return response()->json($respon);

            // return view('import-result');
        }
    }
}
