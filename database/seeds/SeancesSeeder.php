<?php
use App\Seance;
use Illuminate\Database\Seeder;

class SeancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Seance::class, 10)->create();
        //
    }
}
