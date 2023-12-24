<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
       User::create([
        'name' => 'Admin',
        'email' => 'admin@learn-coding.com',
        'phone' => '7250634942',
        'password' =>Hash::make("User@1234"),
        'type' => 'superadmin',
        'status' => '1',
        'profile_images' => 'raja',
       ]);
    }
}
