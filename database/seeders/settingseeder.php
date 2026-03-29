<?php

namespace Database\Seeders;

use App\Models\settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class settingseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $seeting=[['about_me'=>'This is sakil ahmed Tanjil', 'facebook'=>'www.facebook.com','Twitter'=>'www.x.com','Github'=>'www.github.com']];
       settings::insert($seeting);
    }
}
