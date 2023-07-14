<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name'=>'karim',
            'email'=>'karim@gmail.com',
            'gender'=>'male',
            'password'=>md5('12345678'),
            'phone'=>'01236547892',
            'licesne_no'=>'125485548',
            'address'=>'125 highway st',
            'credit_number'=>'1235123447851457',
            'type'=>'1'
        ]);
        
        Customer::create([
            'name'=>'hussin',
            'email'=>'hussin@gmail.com',
            'gender'=>'male',
            'password'=>md5('12345678'),
            'phone'=>'01232247892',
            'licesne_no'=>'263485548',
            'address'=>'125 gleenwood st',
            'credit_number'=>'1245784965004785',
            'type'=>'2',
        ]);
        Customer::create([

            'name'=>'yara',
            'email'=>'yara@gmail.com',
            'gender'=>'female',
            'password'=>md5('12345678'),
            'phone'=>'0115484694',
            'licesne_no'=>'36215482',
            'address'=>'225 county rd',
            'credit_number'=>'665841564569541',
            'type'=>'2'
        ]
        );    }
}
