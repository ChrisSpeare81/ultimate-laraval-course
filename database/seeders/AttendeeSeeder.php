<?php

namespace Database\Seeders;

use App\Models\Attendee;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class AttendeeSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $users = User::all();
        $events = Event::all();

        for ($i = 0; $i < 200; $i++) {

            $user = $users->random();
            $eventsToAttend = $events->random(rand(1, 3));

            foreach ($eventsToAttend as $event) {
                Attendee::factory()->create([
                    'user_id' => $user->id,
                    'event_id' => $event->id
                ]);
            }
        }
    }
}
