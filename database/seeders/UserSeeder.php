<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => "Budi",
            'email' => "budi@admin.com",
            'password' => Hash::make('admin'),
            'api_token' => Str::random(60),
            'avatar' => 'avatar-01.jpg',
        ]);
        
        $user->assignRole('super-admin');
    }
}
