<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 20; $i++) {
            DB::table('clients')->insert([
                'first_name' => str_random(10),
                'last_name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => Hash::make(str_random(10)),
             ]);
        }
    }
}
