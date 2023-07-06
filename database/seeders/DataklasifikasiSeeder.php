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
                'klasifikasi' => '1',
                'bidang' => '1',
            ],
            [
                'namadata' => 'SISWA PUTUS SEKOLAH',
                'klasifikasi' => '1',
                'bidang' => '1',
            ],
            [
                'namadata' => 'ANGKA PARTISIPAN SEKOLAH',
                'klasifikasi' => '1',
                'bidang' => '1',
            ],
            [
                'namadata' => 'ANGKA MELEK HURUF',
                'klasifikasi' => '1',
                'bidang' => '1',
            ],
            [
                'namadata' => 'SERTIFIKASI GURU',
                'klasifikasi' => '1',
                'bidang' => '1',
            ],
            [
                'namadata' => 'ANGKA KELULUSAN PAKET A, B DAN C',
                'klasifikasi' => '1',
                'bidang' => '1',
            ],
            [
                'namadata' => 'KELAHIRAN BAYI',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'BALITA DI KABUPATEN NGANJUK',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'BALITA MENDAPATKAN ASUPAN ASI',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'KEMATIAN BAYI',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'KEMATIAN IBU',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'KASUS HIV BARU',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'STUNTING',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'KEMATIAN ANAK',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'DISABLITAS',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'PASIEN',
                'klasifikasi' => '2',
                'bidang' => '2',
            ],
            [
                'namadata' => 'PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL (PPKS)',
                'klasifikasi' => '2',
                'bidang' => '3',
            ],
            [
                'namadata' => 'JENIS PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL PERKECAMATAN',
                'klasifikasi' => '2',
                'bidang' => '3',
            ],
            [
                'namadata' => 'ORGANISASI SOSIAL',
                'klasifikasi' => '2',
                'bidang' => '3',
            ],
            [
                'namadata' => 'PARTISIPASI PEREMPUAN DI BIDANG POLITIK',
                'klasifikasi' => '1',
                'bidang' => '4',
            ],
            [
                'namadata' => 'JABATAN STRUKTURAL DI KABUPATEN NGANJUK BERDASARKAN GOLONGAN',
                'klasifikasi' => '1',
                'bidang' => '4',
            ],
            [
                'namadata' => 'TENAGA KERJA ',
                'klasifikasi' => '1',
                'bidang' => '4',
            ],
            [
                'namadata' => 'TINDAK KEKERASAN DALAM RUMAH TANGGA (KDRT)',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'PERKARA YANG MASUK PENGADILAN AGAMA',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'CERAI TALAK DAN GUGAT',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'PERKARA PERCERAIAN MENURUT FAKTOR PENYEBABNYA',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'PERKARA YANG DIPUTUS DI PENGADILAN AGAMA',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'TINDAK KEJAHATAN',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'TINDAK KEJAHATAN MENURUT JENIS KEJAHATAN',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'SURAT IJIN MENGEMUDI YANG DITERBITKAN',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'PELANGGARAN LALU LINTAS MENURUT JENIS PELANGGARAN',
                'klasifikasi' => '2',
                'bidang' => '4',
            ],
            [
                'namadata' => 'STURKTUR EKONOMI KABUPATEN NGANJUK',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
            [
                'namadata' => 'PERTUMBUHAN EKONOMI',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
            [
                'namadata' => 'TINGKAT PARTISIPASI ANGKA KERJA',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
            [
                'namadata' => 'TINGKAT PENGANGGURAN TERBUKA',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
            [
                'namadata' => 'STATUS PEKERJAAN',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
            [
                'namadata' => 'KOPRASI',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
            [
                'namadata' => 'USAHA MENENGAN KECIL DAN MIKRO (UMKM)',
                'klasifikasi' => '2',
                'bidang' => '6',
            ],
        ];

        Dataklasifikasi::insert($klasifikasi);
    }
}
