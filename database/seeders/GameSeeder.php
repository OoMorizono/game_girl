<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name' => 'えなこ',
                'img_path' => 'storage/event_image/enakorin2.jpeg'
            ],
            [
                'name' => 'えなこ2',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
            [
                'name' => 'えなこ3',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
            [
                'name' => 'えなこ4',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
            [
                'name' => 'えなこ5',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
            [
                'name' => 'えなこ6',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
            [
                'name' => 'えなこ7',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
            [
                'name' => 'えなこ8',
                'img_path' => 'storage/event_image/enakorin1.jpeg'
            ],
        ]);
    }
}
