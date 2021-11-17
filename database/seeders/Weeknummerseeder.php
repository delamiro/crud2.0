<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Weeknummerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weeknummers')->insert([
            'weeknummer' => '1',
        ]);
        DB::table('weeknummers')->insert([
            'weeknummer' => '2',
        ]);
    }
}
