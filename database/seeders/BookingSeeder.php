<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [[
            'trip_id' => 1,
            'name' => 'Michael',
            'email' => 'Mike77@gmail.com',
            'number_of_people' => 3,
            'status' => 'pending'
        ],[
            'trip_id' => 1,
            'name' => 'Larry',
            'email' => 'Lar98@outlook.com',
            'number_of_people' => 2,
            'status' => 'confirmed'
        ],[
            'trip_id' => 1,
            'name' => 'Susan',
            'email' => 'Susan86@gmail.com',
            'number_of_people' => 4,
            'status' => 'cancelled'
        ],[
            'trip_id' => 1,
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],[
            'trip_id' => 2,
            'name' => 'Mikaela',
            'email' => 'Mika89@gmail.com',
            'number_of_people' => 2,
            'status' => 'pending'
        ],[
            'trip_id' => 2,
            'name' => 'Harry',
            'email' => 'Harry87@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => 2,
            'name' => 'Sindy',
            'email' => 'Sind96@gmail.com',
            'number_of_people' => 3,
            'status' => 'cancelled'
        ],[
            'trip_id' => 2,
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => 3,
            'name' => 'Michael',
            'email' => 'Mike77@gmail.com',
            'number_of_people' => 5,
            'status' => 'pending'
        ],[
            'trip_id' => 3,
            'name' => 'Larry',
            'email' => 'Lar98@outlook.com',
            'number_of_people' => 4,
            'status' => 'confirmed'
        ],[
            'trip_id' => 3,
            'name' => 'Susan',
            'email' => 'Susan86@gmail.com',
            'number_of_people' => 2,
            'status' => 'cancelled'
        ],[
            'trip_id' => 3,
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 6,
            'status' => 'confirmed'
        ],[
            'trip_id' => 4,
            'name' => 'Michael',
            'email' => 'Mike77@gmail.com',
            'number_of_people' => 3,
            'status' => 'pending'
        ],[
            'trip_id' => 4,
            'name' => 'Larry',
            'email' => 'Lar98@outlook.com',
            'number_of_people' => 2,
            'status' => 'confirmed'
        ],[
            'trip_id' => 4,
            'name' => 'Susan',
            'email' => 'Susan86@gmail.com',
            'number_of_people' => 4,
            'status' => 'cancelled'
        ],[
            'trip_id' => 4,
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],[
            'trip_id' => 5,
            'name' => 'Mikaela',
            'email' => 'Mika89@gmail.com',
            'number_of_people' => 2,
            'status' => 'pending'
        ],[
            'trip_id' => 5,
            'name' => 'Harry',
            'email' => 'Harry87@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => 5,
            'name' => 'Sindy',
            'email' => 'Sind96@gmail.com',
            'number_of_people' => 3,
            'status' => 'cancelled'
        ],[
            'trip_id' => 5,
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 5,
            'status' => 'confirmed'
        ],[
            'trip_id' => 6,
            'name' => 'Mikaela',
            'email' => 'Mika89@gmail.com',
            'number_of_people' => 4,
            'status' => 'pending'
        ],[
            'trip_id' => 6,
            'name' => 'Harry',
            'email' => 'Harry87@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ],[
            'trip_id' => 6,
            'name' => 'Sindy',
            'email' => 'Sind96@gmail.com',
            'number_of_people' => 2,
            'status' => 'cancelled'
        ],[
            'trip_id' => 6,
            'name' => 'Marc',
            'email' => 'Marc67@outlook.com',
            'number_of_people' => 3,
            'status' => 'confirmed'
        ]];

        foreach($bookings as $booking){
            Booking::factory()->create($booking);
        }
    }
}
