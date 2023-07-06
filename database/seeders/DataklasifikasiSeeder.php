<?php

namespace Database\Seeders;

use App\Models\Dataklasifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataklasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $klasifikasi = [
            [
                'namadata' => 'DATA PENDUDUK USIA SEKOLAH',
                'id_klasifikasi' => '1',
                'id_bidang' => '1',
            ],
            [
                'namadata' => 'SISWA PUTUS SEKOLAH',
                'id_klasifikasi' => '1',
                'id_bidang' => '1',
            ],
            [
                'namadata' => 'ANGKA PARTISIPAN SEKOLAH',
                'id_klasifikasi' => '1',
                'id_bidang' => '1',
            ],
            [
                'namadata' => 'ANGKA MELEK HURUF',
                'id_klasifikasi' => '1',
                'id_bidang' => '1',
            ],
            [
                'namadata' => 'SERTIFIKASI GURU',
                'id_klasifikasi' => '1',
                'id_bidang' => '1',
            ],
            [
                'namadata' => 'ANGKA KELULUSAN PAKET A, B DAN C',
                'id_klasifikasi' => '1',
                'id_bidang' => '1',
            ],
            [
                'namadata' => 'KELAHIRAN BAYI',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'BALITA DI KABUPATEN NGANJUK',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'BALITA MENDAPATKAN ASUPAN ASI',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'KEMATIAN BAYI',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'KEMATIAN IBU',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'KASUS HIV BARU',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'STUNTING',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'KEMATIAN ANAK',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'DISABLITAS',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'PASIEN',
                'id_klasifikasi' => '2',
                'id_bidang' => '2',
            ],
            [
                'namadata' => 'PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL (PPKS)',
                'id_klasifikasi' => '2',
                'id_bidang' => '3',
            ],
            [
                'namadata' => 'JENIS PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL PERKECAMATAN',
                'id_klasifikasi' => '2',
                'id_bidang' => '3',
            ],
            [
                'namadata' => 'ORGANISASI SOSIAL',
                'id_klasifikasi' => '2',
                'id_bidang' => '3',
            ],
            [
                'namadata' => 'PARTISIPASI PEREMPUAN DI BIDANG POLITIK',
                'id_klasifikasi' => '1',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'JABATAN STRUKTURAL DI KABUPATEN NGANJUK BERDASARKAN GOLONGAN',
                'id_klasifikasi' => '1',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'TENAGA KERJA ',
                'id_klasifikasi' => '1',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'TINDAK KEKERASAN DALAM RUMAH TANGGA (KDRT)',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'PERKARA YANG MASUK PENGADILAN AGAMA',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'CERAI TALAK DAN GUGAT',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'PERKARA PERCERAIAN MENURUT FAKTOR PENYEBABNYA',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'PERKARA YANG DIPUTUS DI PENGADILAN AGAMA',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'TINDAK KEJAHATAN',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'TINDAK KEJAHATAN MENURUT JENIS KEJAHATAN',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'SURAT IJIN MENGEMUDI YANG DITERBITKAN',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'PELANGGARAN LALU LINTAS MENURUT JENIS PELANGGARAN',
                'id_klasifikasi' => '2',
                'id_bidang' => '4',
            ],
            [
                'namadata' => 'STURKTUR EKONOMI KABUPATEN NGANJUK',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
            [
                'namadata' => 'PERTUMBUHAN EKONOMI',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
            [
                'namadata' => 'TINGKAT PARTISIPASI ANGKA KERJA',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
            [
                'namadata' => 'TINGKAT PENGANGGURAN TERBUKA',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
            [
                'namadata' => 'STATUS PEKERJAAN',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
            [
                'namadata' => 'KOPRASI',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
            [
                'namadata' => 'USAHA MENENGAN KECIL DAN MIKRO (UMKM)',
                'id_klasifikasi' => '2',
                'id_bidang' => '6',
            ],
        ];

        Dataklasifikasi::insert($klasifikasi);
    }
}
