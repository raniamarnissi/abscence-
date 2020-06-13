<?php
use App\Modul;
use Illuminate\Database\Seeder;

class ModulsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { /*Modul::truncate();

        Modul::create(['modul' => 'java']);
        Modul::create(['modul' => 'php']);
        Modul::create(['modul' => 'web']);*/


        factory(Modul::class, 3)->create();

        //
    }
}
