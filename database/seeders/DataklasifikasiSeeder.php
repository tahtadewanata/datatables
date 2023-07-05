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
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'SISWA PUTUS SEKOLAH',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'ANGKA PARTISIPAN SEKOLAH',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'ANGKA MELEK HURUF',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'SERTIFIKASI GURU',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'ANGKA KELULUSAN PAKET A, B DAN C',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'KELAHIRAN BAYI',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'BALITA DI KABUPATEN NGANJUK',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'BALITA MENDAPATKAN ASUPAN ASI',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'KEMATIAN BAYI',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'KEMATIAN IBU',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'KASUS HIV BARU',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'STUNTING',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'KEMATIAN ANAK',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'DISABLITAS',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'PASIEN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'KESEHATAN',
            ],
            [
                'namadata' => 'PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL (PPKS)',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'SOSIAL',
            ],
            [
                'namadata' => 'JENIS PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL PERKECAMATAN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'SOSIAL',
            ],
            [
                'namadata' => 'ORGANISASI SOSIAL',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'SOSIAL',
            ],
            [
                'namadata' => 'PARTISIPASI PEREMPUAN DI BIDANG POLITIK',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'POLITIK',
            ],
            [
                'namadata' => 'JABATAN STRUKTURAL DI KABUPATEN NGANJUK BERDASARKAN GOLONGAN',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'POLITIK',
            ],
            [
                'namadata' => 'TENAGA KERJA ',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'POLITIK',
            ],
            [
                'namadata' => 'TINDAK KEKERASAN DALAM RUMAH TANGGA (KDRT)',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'PERKARA YANG MASUK PENGADILAN AGAMA',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'CERAI TALAK DAN GUGAT TAHUN 2020 DAN 2021',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'PERKARA PERCERAIAN MENURUT FAKTOR PENYEBABNYA',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'PERKARA YANG DIPUTUS DI PENGADILAN AGAMA',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'TINDAK KEJAHATAN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'TINDAK KEJAHATAN MENURUT JENIS KEJAHATAN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'SURAT IJIN MENGEMUDI YANG DITERBITKAN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'PELANGGARAN LALU LINTAS MENURUT JENIS PELANGGARAN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'HUKUM DAN HAM',
            ],
            [
                'namadata' => 'STURKTUR EKONOMI KABUPATEN NGANJUK',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
            [
                'namadata' => 'PERTUMBUHAN EKONOMI',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
            [
                'namadata' => 'TINGKAT PARTISIPASI ANGKA KERJA',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
            [
                'namadata' => 'TINGKAT PENGANGGURAN TERBUKA',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
            [
                'namadata' => 'STATUS PEKERJAAN',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
            [
                'namadata' => 'KOPRASI',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
            [
                'namadata' => 'USAHA MENENGAN KECIL DAN MIKRO (UMKM)',
                'klasifikasi' => 'TERPILAH',
                'bidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
        ];

        Dataklasifikasi::insert($klasifikasi);
    }
}
