<?php




namespace App\Http\Controllers\Admin;
use App\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ModulController extends Controller
{
 

    public function affectmodul(Modul $modul)
    {
      
        return view('admin.users.affectmodul', compact('modul'
        ));
  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modul = Modul::all();


        
 
        return view('admin.users.modul', compact('modul'));
       

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.createmodul');


        
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
         
            'modul' => 'required'
          
            
        ]);


        $users = new Modul;

       
     
        $users->modul = $request->modul;
        
        
        $users->save();

     

        return redirect()->route('modul.index')->with('Addmodul', 'New modul added successfully. We sent you an email, please check your inbox.');




        //
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function show(Modul $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function edit(Modul $modul)
    {
        

        return view('admin.users.editmodul', compact('modul'));




        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modul $modul)
    {
    
    





             $modul->update(  $request->validate([
              
                'modul' => 'required'
               
                
                ]));
        
              
        
                 return redirect()->route('modul.index')->with('updatemodul', 'modul updated successfully');
        
        

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modul $modul)
    {  $modul->delete();
        return redirect()->route('modul.index');



        //
    }
}
