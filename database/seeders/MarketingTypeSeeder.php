<?php

namespace Database\Seeders;

use App\Models\MarketingType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*MarketingType::create([
            'PostPeremenType' => 'Постоянный Маркетинг',
            'TypeMarketing' => 'Процент от оплат'
        ]);*/
        DB::table('marketing_types')->insert([
            ['PostPeremenType' => 'Постоянный Маркетинг',
            'TypeMarketing' => 'Процент от оплат'],
            ['PostPeremenType' => 'Постоянный Маркетинг',
             'TypeMarketing' => 'Процент от поставок'],
            ['PostPeremenType' => 'Постоянный Маркетинг',
             'TypeMarketing' => 'Фиксированная сумма'],
            ['PostPeremenType' => 'Переменный Маркетинг',
             'TypeMarketing' => 'Ввод позиций'],
            ['PostPeremenType' => 'Переменный Маркетинг',
             'TypeMarketing' => 'Ротация позиций'],
            ['PostPeremenType' => 'Переменный Маркетинг',
             'TypeMarketing' => 'Газета']
        ]);

    }
}
