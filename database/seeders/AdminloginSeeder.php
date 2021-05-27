<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminloginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('realadmins')->insert([
            'name'=>'imadmin',
            'email'=>'imadmin@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
