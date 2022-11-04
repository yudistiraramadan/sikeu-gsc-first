<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'yudis8913@gmail.com',
            'nama' => 'Yudistira RK',
            'password' => Hash::make('tes'),
            'role_id' => '1',
        ]);
        User::create([
            'email' => 'yudiskw1@gmail.com',
            'nama' => 'Yudistira RK',
            'password' => Hash::make('tes'),
            'role_id' => '1',
        ]);
        User::create([
            'email' => 'yudiskw2@gmail.com',
            'nama' => 'Yudistira RK',
            'password' => Hash::make('tes'),
            'role_id' => '1',
        ]);
    }
}
