<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        UsersSeeder::class,
       
        ClassesSeeder::class,

        ModulsSeeder::class,
    
     
        SeancesSeeder::class,
        AbsensesSeeder::class,

    
      ]);
        // $this->call(UsersTableSeeder::class);
    }
}
