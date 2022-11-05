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
            'email' => 'bendahara@gmail.com',
            'nama' => 'Bendahara',
            'password' => Hash::make('123'),
            'role_id' => '1',
        ]);
        User::create([
            'email' => 'pengamat@gmail.com',
            'nama' => 'Pengamat',
            'password' => Hash::make('123'),
            'role_id' => '2',
        ]);
        User::create([
            'email' => 'relawan@gmail.com',
            'nama' => 'Relawan',
            'password' => Hash::make('123'),
            'role_id' => '3',
        ]);
    }
}
