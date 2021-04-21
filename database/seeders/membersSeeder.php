<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class membersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 20; $i++) {
            DB::table('members')->insert([
                'id' => rand(),
                'Age' => rand(),
                'Name' => Str::random(10),
                'City' => Str::random(10)


            ]);
        }
    }
}
