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
                'agency' => "Trenitalia",
                'station_start' => "Milano Centrale",
                'station_arrive' => "Bologna Centrale",
                'time_start' => "2020/10/20 20:00:00",
                'time_arrive' => "2020/10/20 22:00:00",
                'train_code' => "ABCS1235",
                'num_wagons' => 8,
                "is_in_time" => 0,
                "is_deleted" => 0,
            ],
            [
                'agency' => "TreniItalia",
                'station_start' => "Napoli",
                'station_arrive' => "Rom",
                'time_start' => "2022/10/04 10:00:00",
                'time_arrive' => "2022/10/04 13:00:00",
                'train_code' => "OJFNFJ5326",
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
