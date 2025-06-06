<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin:: create([
            'name' => 'Admin',
            'email' => 'roohulquran@admin.com',
            'password' => Hash::make('hafiz2156'),
        ]);
    }
}
