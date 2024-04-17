<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'id'=>1,
            'username'=>'reyhandwirama',
            'password'=>
            Hash::make('123'),
            'userFullName'=>'Muhammad Reyhan Dwi Rama',
            'userIMG'=> "test.jpg"
        ]);

        DB::table('list_project')->insert([
            'Project_id'=>1,
            'Project_name'=>'reyhandwirama',
            'description'=>'testing doang',
        ],[
            'Project_id'=>2,
            'Project_name'=>'reyhandwirama2',
            'description'=>'testing doang',
        ]);

        DB::table('list_content')->insert([
            'id'=>1,
            'Project_Id'=>1,
            'filename'=>'testing',
        ]);

    }
}
