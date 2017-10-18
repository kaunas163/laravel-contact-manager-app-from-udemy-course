<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();

        $faker = Faker::create();
        $contacts = [];

        foreach (range(1, 50) as $index)
        {
            $contacts[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'company' => $faker->company,
                'group_id' => $faker->numberBetween(1, 4),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
        }

        DB::table('contacts')->insert($contacts);
    }
}
