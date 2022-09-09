<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains =[
            [
                'agency' => "dsadasdsa",
                'station_start' => "Milano Centrale",
                'station_arrive' => "Napoli",
                'time_start' => "10:30:00",
                'time_arrive' => "15:00:00",
                'train_code' => "ADSDA62645",
                'num_wagons' => 8,
                "is_in_time" => 0,
                "is_deleted" => 0,
            ],
            [
                'agency' => "Non Te lo dico",
                'station_start' => "Firenze",
                'station_arrive' => "Bologna",
                'time_start' => "08:00:00",
                'time_arrive' => "09:00:00",
                'train_code' => "GDSFGAS822",
                'num_wagons' => 9,
                "is_in_time" => 1,
                "is_deleted" => 0,
            ]
           
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->station_start = $train['station_start'];
            $newTrain->station_arrive = $train['station_arrive'];
            $newTrain->time_start = $train['time_start'];
            $newTrain->time_arrive = $train['time_arrive'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->num_wagons = $train['num_wagons'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save();
        }
    }
}
