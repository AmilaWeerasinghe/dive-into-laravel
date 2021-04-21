<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DeviceSeeder extends Seeder
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
            DB::table('devices')->insert([
                'id' => rand(),
                'name' => Str::random(10),
                'type' => Str::random(10),
                'city' => Str::random(10)
            ]);
        }
    }
}
