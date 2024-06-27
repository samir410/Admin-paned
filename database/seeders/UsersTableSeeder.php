<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Samir',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'gender' => 'male',
                'role' => 'admin',
                'status' => 'active',
            ],
            [
            'name' => ' Alex ',
            'username' => 'Mentor Alex',
            'email' => 'mentor@gmail.com',
            'password' => Hash::make('111'),
              'gender' => 'male',
            'role' => 'mentor',
            'status' => 'active',
            ],
        ]);
    }
}
