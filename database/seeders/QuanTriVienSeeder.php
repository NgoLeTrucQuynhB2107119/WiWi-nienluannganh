<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuanTriVien;
use Illuminate\Support\Facades\Hash;

class QuanTriVienSeeder extends Seeder
{
    public function run(): void
    {
        QuanTriVien::create([
            'QTV_MA' => 1,
            'QTV_EMAIL' => 'admin@gmail.com',
            'QTV_MATKHAU' => bcrypt('28122003'),
            'QTV_HOTEN' => 'Admin-NLTQ',
        ]);
    }
}