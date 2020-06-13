<?php


namespace App\Http\Controllers\Admin;
use App\User;
use App\Modul;
use App\Classe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function indexteacher()
    {
     
        
        $users = User::all()->where('role',"teacher");
        return view('admin.users.indexteacher', compact('users'));

    }

    
    public function affichemodul()
    {
     
        
        $users =   Auth:: user();
        return view('admin.teacher.teacher', compact('users','classe'));

    }
    
 
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function construct()
    { 
        // $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('role',"student");
        return view('admin.users.index', compact('users'));
        

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function create(Request $request,User $user)
    {
      

        //
    }
    

    public function createuser()
    {
        

        return view('admin.users.createusers');
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
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required'
            
        ]);


        $users = new User;

       
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->role = $request->role;
      
        $users->password = Hash::make($request->password) ;

        $users->save();
      
     

        return redirect('admin/createuser')->with('Adduser', 'New user added successfully. We sent you an email, please check your inbox.');

/////////////////////////////////////
      }
            

     

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {$roles=Modul::all();
      
        return view('admin.users.affectmodul', compact('user','roles'
        ));
  
       




        //
    } 
    
     public function showteacher(User $user)
    {$roles=Modul::all();
      
        return view('admin.users.affectmodulteacher', compact('user','roles'
        ));
  
       




        //
    }

    public function updatemodul(Request $request,User $user)
    {
        $user->moduls()->sync($request->roles);
     return redirect()->route('users.index')->with('updateteacher', 'modul affected successfully');
            

        //
    }
    public function updatemodulteacher(Request $request,User $user)
    {
        $user->moduls()->sync($request->roles);
        return redirect('admin/indexteacher')->with('updateteacher', 'modul updated successfully');
    
            

        //
    }


    public function updateclasse(Request $request,User $user)
    {
        $user->classes()->sync($request->roles);
       return redirect('admin/indexteacher')->with('updateteacher', 'modul updated successfully');
    
            

        //
    }

    public function affectclasse(User $user)
    {$roles=Classe::all();
      
        return view('admin.users.affectclasse', compact('user','roles'
        ));
  
       


      
            
      
        

        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      
return view('admin.users.edit', compact('user'
        ));
  
    }
    public function editteacher(User $user)
    {
      
return view('admin.users.editteacher', compact('user'
        ));
  
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user->moduls()->sync($request->roles);
     //return redirect()->route('users.index');
     

        $user->update(  $request->validate([
              
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required'
           
            
            ]));
    
          
    
             return redirect()->route('users.index')->with('updateteacher', 'modul updated successfully');
    
    
    
    }


    public function updateteacher(Request $request, User $user)
    {
      $user->moduls()->sync($request->roles);
     //return redirect()->route('users.index');
     

        $user->update(  $request->validate([
              
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required'
           
            
            ]));
    
          
    
             return redirect('admin/indexteacher')->with('updateteacher', 'modul updated successfully');
    
    
    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {$user->delete();

        return redirect()->route('users.index')->with('deleteuser', 'user deleted successfully');


   
        //

        //
    }

    public function destroyteacher(User $user)
    {$user->delete();

        return redirect('admin/indexteacher');;


   
        //

        //
    }



    

    //

    
}