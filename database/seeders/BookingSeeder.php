<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Services\UuidRegistry;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [[
            'trip_id' => UuidRegistry::get('trip1'),
            'name' => 'Michael',
            'email' => 'Mike77@gmail.com',
            'number_of_people' => 3,
            'status' => 'pending'
        ],[
            'trip_id' => UuidRegistry::get('trip1'),
            'name' => 'Larry',
            'email' => 'Lar98@outlook.com',
            'number_of_people' => 2,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip1'),
            'name' => 'Susan',
            'email' => 'Susan86@gmail.com',
            'number_of_people' => 4,
            'status' => 'cancelled'
        ],[
            'trip_id' => UuidRegistry::get('trip1'),
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip2'),
            'name' => 'Mikaela',
            'email' => 'Mika89@gmail.com',
            'number_of_people' => 2,
            'status' => 'pending'
        ],[
            'trip_id' => UuidRegistry::get('trip2'),
            'name' => 'Harry',
            'email' => 'Harry87@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip2'),
            'name' => 'Sindy',
            'email' => 'Sind96@gmail.com',
            'number_of_people' => 3,
            'status' => 'cancelled'
        ],[
            'trip_id' => UuidRegistry::get('trip2'),
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip3'),
            'name' => 'Michael',
            'email' => 'Mike77@gmail.com',
            'number_of_people' => 5,
            'status' => 'pending'
        ],[
            'trip_id' => UuidRegistry::get('trip3'),
            'name' => 'Larry',
            'email' => 'Lar98@outlook.com',
            'number_of_people' => 4,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip3'),
            'name' => 'Susan',
            'email' => 'Susan86@gmail.com',
            'number_of_people' => 2,
            'status' => 'cancelled'
        ],[
            'trip_id' => UuidRegistry::get('trip3'),
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 6,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip4'),
            'name' => 'Michael',
            'email' => 'Mike77@gmail.com',
            'number_of_people' => 3,
            'status' => 'pending'
        ],[
            'trip_id' => UuidRegistry::get('trip4'),
            'name' => 'Larry',
            'email' => 'Lar98@outlook.com',
            'number_of_people' => 2,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip4'),
            'name' => 'Susan',
            'email' => 'Susan86@gmail.com',
            'number_of_people' => 4,
            'status' => 'cancelled'
        ],[
            'trip_id' => UuidRegistry::get('trip4'),
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],,[
            'trip_id' => UuidRegistry::get('trip5'),
            'name' => 'Mikaela',
            'email' => 'Mika89@gmail.com',
            'number_of_people' => 2,
            'status' => 'pending'
        ],[
            'trip_id' => UuidRegistry::get('trip5'),
            'name' => 'Harry',
            'email' => 'Harry87@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip5'),
            'name' => 'Sindy',
            'email' => 'Sind96@gmail.com',
            'number_of_people' => 3,
            'status' => 'cancelled'
        ],[
            'trip_id' => UuidRegistry::get('trip5'),
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],,[
            'trip_id' => UuidRegistry::get('trip6'),
            'name' => 'Mikaela',
            'email' => 'Mika89@gmail.com',
            'number_of_people' => 4,
            'status' => 'pending'
        ],[
            'trip_id' => UuidRegistry::get('trip6'),
            'name' => 'Harry',
            'email' => 'Harry87@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],[
            'trip_id' => UuidRegistry::get('trip6'),
            'name' => 'Sindy',
            'email' => 'Sind96@gmail.com',
            'number_of_people' => 2,
            'status' => 'cancelled'
        ],[
            'trip_id' => UuidRegistry::get('trip6'),
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],];

        foreach($bookings as $booking){
            Booking::factory()->create($booking);
        }
    }
}
