<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => '1',
            'email' => 'info@verifen.com',
            'password' => bcrypt('verifen@2024'),
            'name' => 'Admin'
        ]);
    }
}
