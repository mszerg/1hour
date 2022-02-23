<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            ['name' => 'Все менеджеры',
                'age' => '1',
                'job' => 'Менеджер',
            ],
        ]);
    }
}
