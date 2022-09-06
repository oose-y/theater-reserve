<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => '劇団ひとり',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-05 10:00:00',
                'end_date' => '2023-09-05 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団ひとり',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-06 10:00:00',
                'end_date' => '2023-09-06 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団ふたり',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-07 10:00:00',
                'end_date' => '2023-09-07 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団ふたり',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-08 10:00:00',
                'end_date' => '2023-09-08 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団ふたり',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-09 10:00:00',
                'end_date' => '2023-09-09 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団さんにん',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-10 10:00:00',
                'end_date' => '2023-09-010 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団さんにん',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => 'event-image1.jpg',
                'start_date' => '2023-09-011 10:00:00',
                'end_date' => '2023-09-011 11:00:00',
                'is_visible' => true
            ],
            [
                'name' => '劇団さんにん',
                'information' => 'テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。テスト説明です。',
                'max_people' => 50,
                'image' => '/storage/images/event-image1.jpg',
                'start_date' => '2023-09-12 10:00:00',
                'end_date' => '2023-09-12 11:00:00',
                'is_visible' => true
            ],
        ]);
    }
}
