<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        User::create([
            'name' => 'Petra',
            'email' => 'petra@gmail.com',
            'password' => '1234',
            'image' => 'kosong'
        ]);
        
        
        User::create([
            'name' => 'MujiTot',
            'email' => 'muji@gmail.com',
            'password' => '1234',
            'image' => 'kosong'
        ]);

        
        User::create([
            'name' => 'Titit',
            'email' => 'Abdu@gmail.com',
            'password' => '1234',
            'image' => 'kosong'
        ]);
    }
}
