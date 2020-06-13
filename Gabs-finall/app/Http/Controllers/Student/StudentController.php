<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use   App\Modul;
use App\Seance;
use App\Absense;
class StudentController extends Controller
{
    public function affiche(){
    $seance = Auth::user()->seance()->orderBy('created_at', 'desc')->get();
return view('student.seance_module', compact('seance'));
    }
    public function affichemodule(){
        $module = Modul::orderBy('created_at', 'desc')->get();
    return view('student.module', compact('module'));
        }
        public function afficheabscence(){
            $abscence = Auth::user()->absences()->orderBy('created_at', 'desc')->get();
          
            return view('student.abscence', compact('abscence'));
        }
        
}
