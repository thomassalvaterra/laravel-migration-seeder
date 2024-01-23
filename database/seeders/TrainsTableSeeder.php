<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                "agency" => "Trenitalia",
                "departure_station" => "Milano",
                "arrival_station" => "Caserta",
                "departure_time" => "08.30",
                "arrival_time" => "15.15",
                "train_code" => "357097",
                "carriage_number" => "CY427",
                "train_cancelled" => true,
                "in_time" => false
            ],
            [
                "agency" => "Trenord",
                "departure_station" => "Catania",
                "arrival_station" => "Siracusa",
                "departure_time" => "20.30",
                "arrival_time" => "22.00",
                "train_code" => "789234",
                "carriage_number" => "NB709",
                "train_cancelled" => false,
                "in_time" => true
            ]
        ];

        foreach ($trains as $train) {
            $nuovoTreno = new Train();
            $nuovoTreno->agency = $train["agency"];
            $nuovoTreno->departure_station = $train["departure_station"];
            $nuovoTreno->arrival_station = $train["arrival_station"];
            $nuovoTreno->departure_time = $train["departure_time"];
            $nuovoTreno->arrival_time = $train["arrival_time"];
            $nuovoTreno->train_code = $train["train_code"];
            $nuovoTreno->carriage_number = $train["carriage_number"];
            $nuovoTreno->train_cancelled = $train["train_cancelled"];
            $nuovoTreno->in_time = $train["in_time"];
            $nuovoTreno->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $nuovoTreno = new Train();
            $nuovoTreno->agency = $faker->name();
            $nuovoTreno->departure_station = $faker->city();
            $nuovoTreno->arrival_station = $faker->city();
            $nuovoTreno->departure_time = $faker->time();
            $nuovoTreno->arrival_time = $faker->time();
            $nuovoTreno->train_code = $faker->randomNumber(6, true);
            $nuovoTreno->carriage_number = $faker->regexify('[A-Z]{2}[0-9]{3}');
            $nuovoTreno->train_cancelled = true;
            $nuovoTreno->in_time = true;
            $nuovoTreno->save();
        }
    }
}
