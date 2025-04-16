<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 10 ; $i++) { 
            DB::table('transactions')->insert([
                'user_id' => $faker->numberBetween(1,10),
                'date' => $faker->dateTimeBetween('-1 month','now'),
                'total' => $faker->numberBetween(50000,200000),
                'paytotal' => $faker->numberBetween(50000,300000),
            ]);
        };
    }
}
