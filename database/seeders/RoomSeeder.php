<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'name' => '山田',
                'img_path' => 'storage/event_image/apex.png'
            ],
            [
                'name' => 'たかし',
                'img_path' => 'storage/event_image/valorant_room.jpeg'
            ],
            [
                'name' => 'ドラケン',
                'img_path' => 'storage/event_image/あつもり_サムネ.jpeg'
            ]
        ]);
    }
}
