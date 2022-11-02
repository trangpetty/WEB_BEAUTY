<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'username' => 'trangpetty',
                'email' => 'trangpetty22072001@gmail.com',
                'password' => 'Nghia26072001',
                'role' => 1
            ],
            [
                'username' => 'trangle',
                'email' => 'trang200164@nuce.edu.vn',
                'password' => 'Nghia26072001',
                'role' => 0
            ]
        ]);
    }
}
