<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailUser::create([
            'user_id' => 1,
            'foto' => 'yudis.jgp',
            'alamat' => 'Jl. Sulawesi Perum Puri Tanjung Intan No.B2 Gunung Simping',
            'tlpn' => '085228409840',
            'jk' => 'laki-laki',
            'status' => 'aktif',
        ]);
        DetailUser::create([
            'user_id' => 2,
            'foto' => 'jae.jgp',
            'alamat' => 'Jl. Dahlia Gang 2 No.70.A RT 03 RW 12 Pelutan Pemalang 52311',
            'tlpn' => '085228409840',
            'jk' => 'laki-laki',
            'status' => 'aktif',
        ]);
        DetailUser::create([
            'user_id' => 3,
            'foto' => 'yudis.jgp',
            'alamat' => 'Jl. Di Ponegoro No 30 Gang Bunga Anggrek Mawar',
            'tlpn' => '085228409840',
            'jk' => 'perempuan',
            'status' => 'aktif',
        ]);
    }
}
