<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => Str::uuid()->toString(),
            'email' => 'info@verifen.com',
            'password' => bcrypt('Verifen@2024'),
            'name' => 'Admin',
            'status' => true
        ]);
    }
}
