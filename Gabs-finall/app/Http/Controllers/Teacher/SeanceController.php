<?php






namespace App\Http\Controllers\Teacher;
use App\Seance;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Auth:: user();
        return view('teacher.abscense.createseance', compact('users'))->with('Adduser', 'New seance added successfully !!'); //,'classe'
        

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function affichemodulse()
    {
     
        
        $users = Auth:: user();
        return view('teacher.abscense.createseance', compact('users')); //,'classe'

    }

    public function chercherseance(){
     
        $seance = Auth:: user();
        return view('teacher.abscense.chercherseance', compact('seance'));

    }

    public function store(Request $request)
    {
        $request->validate([

            'date' => 'required',
            'Heure_debut' => 'required',
            'Heure_fin' => 'required',
            'type' => 'required',
            'module' => 'required',
            'classe' => 'required',
        
        ]);


        $seance = new Seance;
        
        $seance->user_id = Auth::id();
  
       
        $seance->date = $request->date;
        $seance->Heure_debut = $request->Heure_debut;
        $seance->Heure_fin = $request->Heure_fin;
      
        $seance->type = $request->type;
      
        $seance->module = $request->module;
      
        $seance->classe = $request->classe;
        $seance->save();
      
     

        return redirect()->route('seance.create')->with('Adduser', 'New seance added successfully. We sent you an email, please check your inbox.');


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        //
    }
}
