<?php
use App\User;
use App\Modul;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
     /*   User:: truncate();
        DB ::table('modul_user')-> truncate();
        //factory(User::class, 3)->create();

        $admin= User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'address' => 'bizerte',
            'phone' => '23344556',
            'role' => 'admin',
            'password' => Hash::make('password') 
        ]);

        //
        
    $student= User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'address' => 'bizerte',
            'phone' => '23344556',
            'role' => 'student',
            'password' => Hash::make('password') 
        ]);

     $teacher= User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'address' => 'bizerte',
            'phone' => '23344556',
            'role' => 'teacher',
            'password' => Hash::make('password') 
        ]);

        $adminRole = Modul::where('modul', 'java')->first();
        $studentRole = Modul::where('modul', 'php')->first();
        $teacherRole = MOdul::where('modul', 'web')->first();

        $admin->moduls()->attach($adminRole);
        $student->moduls()->attach($studentRole);
        $teacher->moduls()->attach($teacherRole);*/
     
        factory(User::class, 3)->create();
     
    }
}
