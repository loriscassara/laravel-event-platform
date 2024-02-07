<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'Event 1',
                'date' => '2024-05-12',
                'available_tickets' => 100
            ],
            [
                'name' => 'Event 2',
                'date' => '2024-06-12',
                'available_tickets' => 200
            ],
            [
                'name' => 'Event 3',
                'date' => '2024-07-12',
                'available_tickets' => 250
            ],
            [
                'name' => 'Event 4',
                'date' => '2024-08-12',
                'available_tickets' => 150
            ]
        ];

        foreach ($events as $event) {

            $newEvent = new Event();
            $newEvent->fill($event);
            $newEvent->save();
        }
    }
}