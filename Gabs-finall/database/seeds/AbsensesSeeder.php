<?php
use App\Absense;
use Illuminate\Database\Seeder;

class AbsensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Absense::class, 3)->create();  
        //
    }
}
