<?php

namespace Database\Seeders;

use App\Models\people;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'number' => $faker->phoneNumber,
                'email' => $faker->email,
                'country' => $faker->country,
                'city' => $faker->city,
                'street' => $faker->streetAddress,
                'postcode' => $faker->postcode
            ]);
        }
    }
}