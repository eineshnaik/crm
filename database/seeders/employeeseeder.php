<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'firstname'=>'sachin',
            'lastname'=>'sharma',
            'name'=>'google',
            'email'=>'sachinsharma@gmail.com',
            'phone'=>'12345678'
        ]);

        DB::table('employees')->insert([
            'firstname'=>'kartik',
            'lastname'=>'yadav',
            'name'=>'microsoft',
            'email'=>'kartik@gmail.com',
            'phone'=>'12345678'
        ]);
    }
}
