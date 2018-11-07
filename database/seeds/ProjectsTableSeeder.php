<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Projects;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = Projects::getStatuses();

        for ($i = 1; $i < 20; $i++) {
            DB::table('projects')->insert([
                'name' => str_random(10),
                'description' => str_random(10),
                'status' => $statuses[array_rand($statuses, 1)],
            ]);
        }
    }
}
