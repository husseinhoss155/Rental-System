<?php

use Illuminate\Database\Seeder;
use App\Car;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'model'=>'toyota',
            'year'=>'2020',
            'plate_id'=>'ide5125',
            'color'=>'red',
            'price'=>'1000',
            'status'=>'active',
            'country' => 'Egypt'

        ]    );

        Car::create([
            'model'=>'toyota',
            'year'=>'2020',
            'plate_id'=>'dd45477',
            'color'=>'red',
            'price'=>'2000',
            'status'=>'active',
            'country' => 'England'
        ]    );
        Car::create([


            'model'=>'bmw',
            'year'=>'2018',
            'plate_id'=>'sed5698',
            'color'=>'black',
            'price'=>'3000',
            'status'=>'active',
            'country' => 'Sudan'


         ]);

        Car::create([


            'model'=>'avio',
            'year'=>'2018',
            'plate_id'=>'er47888',
            'color'=>'blue',
            'price'=>'4000',
            'status'=>'active',
            'country' => 'Egypt'


        ]);
         Car::create([
            'model'=>'hyandi',
            'year'=>'2021',
            'plate_id'=>'oit2157',
            'color'=>'blue',
            'price'=>'5000',
            'status'=>'active',
                 'country' => 'Spain'
        ]
        );
        Car::create([
                'model'=>'lamborgini',
                'year'=>'2013',
                'plate_id'=>'sser158',
                'color'=>'black',
                'price'=>'7000',
                'status'=>'active',
                'country' => 'Italy'
            ]
        );
        Car::create([
                'model'=>'ferari',
                'year'=>'2007',
                'plate_id'=>'wer78955',
                'color'=>'red',
                'price'=>'6000',
                'status'=>'active',
                'country' => 'Morocco'
            ]
        );
        Car::create([
                'model'=>'mitsubishi',
                'year'=>'2001',
                'plate_id'=>'ddf77',
                'color'=>'white',
                'price'=>'1500',
                'status'=>'active',
                'country' => 'Germany'
            ]
        );
        Car::create([
                'model'=>'nissan',
                'year'=>'2019',
                'plate_id'=>'ss7548',
                'color'=>'brown',
                'price'=>'3500',
                'status'=>'active',
                'country' => 'Japan'
            ]
        );
    }

}
