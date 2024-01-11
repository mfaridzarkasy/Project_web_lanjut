<?php

namespace Database\Seeders;

use App\Models\Televisi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TelevisiSeeder extends Seeder
{
    public function run(): void
    {
        $televisis =  [
            [
                'id' => 'tt1746090',
                'nama' => 'Bravia A8H',
                'deskripsi' => 'Sony Bravia A8H adalah TV 55 inci dengan resolusi 4K Ultra HD dan layar OLED. Ditenagai oleh α9 Gen 2 Intelligent Processor, menawarkan gambar tajam dan warna yang hidup. Sistem audio inovatif, Acoustic Surface Audio, menggunakan seluruh layar sebagai pengeras suara, menciptakan pengalaman audio imersif. Dilengkapi dengan Android TV, memudahkan akses ke aplikasi dan layanan streaming, serta kontrol suara dengan Google Assistant. Desain elegan dan performa tinggi membuatnya cocok bagi mereka yang mengutamakan kualitas gambar dan audio.',
                'tahun' => 2023,
                'category_id' => 1,
                'perusahaan' => 'Sony',
                'foto_sampul' => 'tv1.jpg',
            ],
            [
                'id' => 'tt0944947',
                'nama' => 'OLED805',
                'deskripsi' => 'OLED 805 dari Philips adalah televisi berkualitas tinggi dengan layar OLED berukuran 55 inci dan resolusi 4K Ultra HD. Menghadirkan gambar yang mengesankan dengan tingkat kontras yang luar biasa dan warna yang kaya berkat teknologi OLED. ',
                'tahun' => 1995,
                'category_id' => 1,
                'perusahaan' => 'philips',
                'foto_sampul' => 'tv2.jpg',
            ],
            [
                'id' => 'tt0111161',
                'nama' => 'QLED Q90R',
                'deskripsi' => 'QLED Q90R dari Samsung adalah televisi premium dengan layar berukuran 65 inci dan resolusi 4K Ultra HD. Memanfaatkan teknologi QLED, TV ini memberikan warna yang cerah dan akurat, serta kontras yang tinggi. ',
                'tahun' => 1991,
                'category_id' => 2,
                'perusahaan' => 'Samsung',
                'foto_sampul' => 'tv3.jpg',
            ],
            [
                'id' => 'tt0109830',
                'nama' => 'R635',
                'deskripsi' => '6-Series (R635) dari TCL adalah televisi canggih dengan layar 65 inci dan resolusi 4K Ultra HD. Menampilkan teknologi Mini-LED backlight dan QLED untuk warna yang hidup dan kontras yang tajam.',
                'tahun' => 1983,
                'category_id' => 2,
                'perusahaan' => 'TCL',
                'foto_sampul' => 'tv4.jpg',
            ],
            [
                'id' => 'tt0108778',
                'nama' => 'TX',
                'deskripsi' => 'TX-55GZ2000E dari Panasonic adalah televisi berkualitas tinggi dengan layar 55 inci dan resolusi 4K Ultra HD. Mengusung teknologi layar OLED untuk kontras yang mendalam dan warna yang akurat.',
                'tahun' => 1995,
                'category_id' => 1,
                'perusahaan' => 'filips',
                'foto_sampul' => 'tv5.jpg',
            ],
            [
                'id' => 'tt0109831',
                'nama' => 'OLED C9',
                'deskripsi' => 'OLED C9 dari LG adalah televisi premium dengan layar 55 inci dan resolusi 4K Ultra HD. Memanfaatkan teknologi layar OLED untuk kontras tak tertandingi dan warna yang sangat akurat',
                'tahun' => 2014,
                'category_id' => 1,
                'perusahaan' => 'LG',
                'foto_sampul' => 'tv6.jpg',
            ],
            [
                'id' => 'tt1234567',
                'nama' => 'LG',
                'deskripsi' => 'OLED C9 dari LG adalah televisi premium dengan layar 55 inci dan resolusi 4K Ultra HD. Memanfaatkan teknologi layar OLED untuk kontras tak tertandingi dan warna yang sangat akurat',
                'tahun' => 2011,
                'category_id' => 1,
                'perusahaan' => 'LG',
                'foto_sampul' => 'tv2.jpg',
            ]
        ];
        foreach ($televisis as $televisi) {
            Televisi::create([
                'id' => $televisi['id'],
                'nama' => $televisi['nama'],
                'deskripsi' => $televisi['deskripsi'],
                'tahun' => $televisi['tahun'],
                'category_id' => $televisi['category_id'],
                'perusahaan' => $televisi['perusahaan'],
                'foto_sampul' => $televisi['foto_sampul'],
            ]);
        }
    }
}
