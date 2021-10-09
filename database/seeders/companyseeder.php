<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            'name'=>'tcs',
            'email'=>'tcs@tata.in',
            'website'=>'tcs.in'
        ]);

        DB::table('companies')->insert([
            'name'=>'google',
            'email'=>'google@gmail.in',
            'website'=>'google.co.in'
        ]);

        DB::table('companies')->insert([
            'name'=>'microsoft',
            'email'=>'microsoft@ms.co',
            'website'=>'microsoft.com'
        ]);


    }
}
