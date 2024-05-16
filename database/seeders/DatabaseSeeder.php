<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'indra',
            'email' => 'indra@gmail.com',
            'password' => Hash::make('123'),

        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'STTAL',
            'email' => 'sttal@ac.id.com',
            'address' => 'Jl. Bumi Moro, Morokrembangan, Kec. Krembangan, Surabaya, Jawa Timur 60178',
            'latitude' =>'-7.219779417417256',
            'longitude'=> '112.7184932950058',
            'radius_km' => '0.5',
            'time_in' => '07.00',
            'time_out' => '15.30',
        ]);

        $this->call([
            AttendanceSeeder::class,
        ]);
    }

}
