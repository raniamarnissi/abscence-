<?php
use App\User;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//////////////////////////////////////////////////////////////


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('ViewPages', 'ViewController@index');
Route::post('ViewPages', 'ViewController@index');

Route::get('Viewsenace', 'seanceController@index');
Route::post('Viewseance', 'seanceController@index');


Route::get('/', 'AppController@index')->name('welcome');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/profile', 'UserController@update_image');


/********************** Search absense**************************/




Route::GET('/search',function(){
  $q = Input::get ( 'q' );
  $user = User::where('role',"student")->where('name','LIKE','%'.$q.'%')->get();
  if(count($user) > 0)
      return view('teacher.abscense.gestionabs')->withDetails($user)->withQuery ( $q );
  else return view ('teacher.abscense.gestionabs')->withMessage('No Details found. Try to search again !');
});



/********************** Search seance **************************/


Auth::routes();


Route::middleware('auth')->group(function () {


  
    Route::get('/home', 'AppController@home')->name('home');



    Route::get('teacher/absence/{student}', 'Teacher\AbsenseController@absence');




    Route::get('admin/affectclasse/{user}', 'Admin\UserController@affectclasse');

    Route::patch('admin/cls/{classe}', 'Admin\UserController@cls');


    Route::patch('admin/updateclasse/{user}', 'Admin\UserController@updateclasse');

    Route::get('admin/destroyteacher/{user}', 'Admin\UserController@destroyteacher');

    Route::get('admin/editteacher/{user}', 'Admin\UserController@editteacher');

    Route::patch('admin/updateteacher/{user}', 'Admin\UserController@updateteacher');


    

    Route::patch('admin/updatemodul/{user}', 'Admin\UserController@updatemodul');





//route
Route::get('teacher/affectabsence', 'Teacher\ClasseController@affectabsence');


    Route::get('teacher/afficheetudiant', 'Teacher\ClasseController@afficheetudiant');
//





    Route::get('admin/showteacher/{user}', 'Admin\UserController@showteacher');
    Route::patch('admin/updatemodulteacher/{user}', 'Admin\UserController@updatemodulteacher');

    Route::patch('admin/updateclasses/{classe}', 'Admin\ClasseController@updateclasses');

    Route::get('teacher/affichemodul', 'Teacher\UserController@affichemodul');
    
    Route::post('teacher/affichestudent', 'Teacher\ClasseController@affichestudent');

    Route::get('teacher/affichemodulse', 'Teacher\SeanceController@affichemodulse');
    Route::get('student/affiche_abscence', 'Student\StudentController@afficheabscence');
    //Route::get('teacher/chercherstudent', 'Teacher\UserController@chercherstudent');




    Route::get('teacher/affectabsence', 'Teacher\ClasseController@affectabsence');



    Route::group([
      'middleware' => 'teacher',
      'namespace' => 'Teacher',
      'prefix' => 'teacher'
    ], function () {

        Route::resource('seance', 'SeanceController');
      
  });


    // 
    Route::group([
                'middleware' => 'admin',
                'namespace' => 'Admin',
                'prefix' => 'admin'
            ], function () {

                
                  
                    Route::resource('modul', 'ModulController');
                
                  
                  Route::get('indexteacher', 'UserController@indexteacher');
                  Route::get('editteacher', 'UserController@editteacher');
                  Route::get('affect', 'UserController@affect');
            
                  Route::get('createuser', 'UserController@createuser');

          Route::resource('users', 'UserController');

          
          Route::resource('classe', 'ClasseController');

  
         
       
       
            });
});
