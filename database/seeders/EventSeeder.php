<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'sport' => 'football',
                'date' => '2025-01-15',
                'time' => '4:00 PM - 9:00 PM',
                'city' => 'gombak',
                'location' => 'IIUM Main Field',
                'prizes' => 'RM 1,000 + Trophy + Medals',
                'total_slots' => 12,
                'available_slots' => 8,
                'image_path' => 'images/event1.jpg'
            ],
            [
                'sport' => 'volleyball',
                'date' => '2025-02-10',
                'time' => '8:00 AM - 5:00 PM',
                'city' => 'kuala-lumpur',
                'location' => 'University Malaya Field',
                'prizes' => 'Medals + RM 2,000 Cash Prizes',
                'total_slots' => 20,
                'available_slots' => 15,
                'image_path' => 'images/event2.jpg'
            ],
            // Add more events as needed
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
} 