<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseCleanupSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();
    }
}