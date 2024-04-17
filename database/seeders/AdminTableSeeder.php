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

        $projects = [
            [
                'Project_id' => 1,
                'Project_name' => 'Photoshoot x Ganindra Bimo',
                'description' => 'We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno. even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined.',
                'Type'=>'foto',
                'filename'=>'uploads/Project/detail-work.png',
                'Type_content'=> 'FORMAT;Actor Photoshoot%COLLABORATION;Ganindra Bimo%DATE;18-9-2023%CAMERA;Fujifilm GFX 50R',
                'status'=>1,
            ],[
                'Project_id' => 2,
                'Project_name' => 'Photoshoot x Ganindra Bimo 1',
                'description' => 'We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno. even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined.',
                'Type'=>'foto',
                'filename'=>'uploads/Project/detail-work.png',
                'Type_content'=> 'FORMAT;Actor Photoshoot%COLLABORATION;Ganindra Bimo%DATE;18-9-2023%CAMERA;Fujifilm GFX 50R',
                'status'=>1,
            ],[
                'Project_id' => 3,
                'Project_name' => 'Photoshoot x Ganindra Bimo 2',
                'description' => 'We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno. even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined.',
                'Type'=>'foto',
                'filename'=>'uploads/Project/detail-work.png',
                'Type_content'=> 'FORMAT;Actor Photoshoot%COLLABORATION;Ganindra Bimo%DATE;18-9-2023%CAMERA;Fujifilm GFX 50R',
                'status'=>1,
            ],
            // Add more project entries here...
        ];
        DB::table('list_project')->insert($projects); // Insert all projects in one go

        DB::table('list_content')->insert([[
            'id'=>1,
            'Project_Id'=>1,
            'filename'=>'/uploads/Content/detail-work.png',
        ],[
            'id'=>2,
            'Project_Id'=>1,
            'filename'=>'/uploads/Content/detail-work.png',
        ],[
            'id'=>3,
            'Project_Id'=>1,
            'filename'=>'/uploads/Content/detail-work.png',
        ],]);

        DB::table('list_project')->insert([[
            'Project_id' => 4,
            'Project_name' => 'Video 1',
            'description' => 'We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno. even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined.',
            'Type'=>'video',
            'filename'=>'uploads/Project/detail-work.png',
            'Type_content'=> 'FORMAT;Actor Photoshoot%COLLABORATION;Ganindra Bimo%DATE;18-9-2023%CAMERA;Fujifilm GFX 50R',
            'status'=>1,
            'url'=>'DnqYe9R7LQw',
        ],[
            'Project_id' => 5,
            'Project_name' => 'Video 2',
            'description' => 'We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno. even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined.',
            'Type'=>'video',
            'filename'=>'uploads/Project/detail-work.png',
            'Type_content'=> 'FORMAT;Actor Photoshoot%COLLABORATION;Ganindra Bimo%DATE;18-9-2023%CAMERA;Fujifilm GFX 50R',
            'status'=>1,
            'url'=>'DnqYe9R7LQw',
        ],[
            'Project_id' => 6,
            'Project_name' => 'Video 3',
            'description' => 'We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno. even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined.',
            'Type'=>'video',
            'filename'=>'uploads/Project/detail-work.png',
            'Type_content'=> 'FORMAT;Actor Photoshoot%COLLABORATION;Ganindra Bimo%DATE;18-9-2023%CAMERA;Fujifilm GFX 50R',
            'status'=>1,
            'url'=>'DnqYe9R7LQw',
        ],]);

    }
}
