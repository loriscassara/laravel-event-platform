<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Generator as Faker;
use App\Models\User;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run($num_eventi, Faker $faker)
    {
        for ($i = 0; $i < $num_eventi; $i++) {
            $newEvent = new Event();
            $newEvent->user_id = $faker->randomElement($this->getUtentiID());
            $newEvent->name = $faker->sentence(3);
            $newEvent->date = $faker->date();
            $newEvent->available_tickets = $faker->randomNumber(3, false);
            $newEvent->save();
        }
    }

    private function getUtentiID()
    {
        return User::all()->pluck('id');
    }
}