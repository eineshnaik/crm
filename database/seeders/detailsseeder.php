<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class detailsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('details')->insert([
            'id'=>'1',
            'name'=>'en',
            'email'=>'admin@admin.com',
            'password'=>'password'
        ]);
    }
}
