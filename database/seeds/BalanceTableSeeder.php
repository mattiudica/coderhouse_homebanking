<?php

use Illuminate\Database\Seeder;
use App\Balance;

class BalanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Balance::class)->create();
    }
}
