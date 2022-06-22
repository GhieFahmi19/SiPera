<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendudukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_penduduk'                       => '001',
                'nama'                              => 'BUDIMAN SANJAYA',
                'nik'                               => '3213270101010001',
                'email'                             => 'sanjaya@gmail.com',
                'id_keluarga'                       => '2007.001',
                'id_datang'                         => '',
                'id pindah'                         => '',
                'kk_level'                          => 'Kepala Keluaraga',
                'no_kk_sebelumnya'                  => '',
                'id_status_ktp'                     => '',
                'id_penduduk_hubungan'              => 'Suami',
                'ktp_el'                            => 'ktp-el',
                'status_rekam'                      => 'Sudah Rekam',
                'jk'                                => 'Laki-laki',
                'tempat_lahir'                      => 'Subang',
                'tanggal_lahir'                     => '01-01-1970',
                'jenis_kelahiran'                   => 'Tunggal',
                'kelahiran_anak_ke'                 => '2',
                'berat_lahir'                       => '2,7 kg',
                'panjang_lahir'                     => '73 cm',
                'id_penduduk_agama'                 => 'Islam',
                'id_penduduk_pendidikan'            => 'Tamat SMA/Sederajat',
                'id_penduduk_pendidikan_berjalan'   => '',
                'id_penduduk_pekerjaan'             => 'WIRASWASTA',
                'id_penduduk_umur'                  => '52',
                'status_kawin'                      => 'Kawin',
                'id_warganegara'                    => 'WNI',
                'nik_ayah'                          => 'RAHMAN',
                'nik_ibu'                           => 'SUYATNI',
                'nama_ayah'                         => '',
                'nama_ibu'                          => '',
                'id_gol_darah'                      => 'Tidak Tahu',
                'alamat_sebelumnya'                 => '',
                'alamat_sekarang'                   => 'Kp. Manyeti',
                'id_cacat'                          => '',
                'id_sakit_menahun'                  => '',
                'akte_lahir'                        => '',
                'id_asuransi'                       => '',
                'no_asuransi'                       => '',

            ]
        ];
        $this->db->table('tbl_penduduk')->insertBatch($data);
    }
}
