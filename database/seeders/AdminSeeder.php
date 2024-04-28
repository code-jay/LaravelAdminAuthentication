<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();

        $admin = Admin::create([
            'name' => 'Admin',
            'type' => 'admin',
            'password' => Hash::make('secret'),
            'email' => 'admin@yourdomain.com',
            'status' => 1,
        ]);
    }
}
