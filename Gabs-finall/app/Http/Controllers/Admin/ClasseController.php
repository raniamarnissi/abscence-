<?php





namespace App\Http\Controllers\Admin;

use App\Classe;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    public function updateclasses(Request $request, Classe $classe)
    {
$classe->users()->sync($request->roles);
return redirect()->route('classe.index')->with('Addmodul', 'New classe added successfully. We sent you an email, please check your inbox.');

    
        
        //
    }


    public function index()
    {
        $classe = Classe::all();
        return view('admin.users.indexclasse', compact('classe'));


        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.createclasse');


        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         
            'class_name' => 'required'
          
            
        ]);


        $classe = new Classe;

       
     
        $classe->class_name = $request->class_name;
        
        
        $classe->save();

     

        return redirect()->route('classe.index')->with('Addmodul', 'New classe added successfully. We sent you an email, please check your inbox.');





        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
      
  
        $roles=User::all()->where('role',"student");
      
        return view('admin.users.affectuser', compact('classe','roles'
        ));
  


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        return view('admin.users.editclasse', compact('classe'
        ));
  
        //
    }
  
    public function affichestudent()
    {
     
        
        $classe = Auth:: user();
        return view('admin.teacher.affectabsence', compact('classe'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {

    
        $classe->update(  $request->validate([
            'class_name' => 'required'
            
            
        
       
            
            ]));
    
          
    
             return redirect()->route('classe.index')->with('updateteacher', 'users updated successfully');
    
        //
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();
        return redirect()->route('classe.index');


        //
    }
}
