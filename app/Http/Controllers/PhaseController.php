<?php

namespace App\Http\Controllers;
use App\Models\phase;
use App\Models\projet;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
 
    public function vu(Request $request,$id){

        $projet=projet::find($id);

        return view('phase',compact('projet'));
    }
    
public function enregistrer(Request $request,$idpro){

    $projet = projet::find($idpro);
    $phase= new phase();
  
    $phase->nom=$request->nom;
    $phase->duree=$request->duree;
    $phase->propriete=$request->propriete;
    $phase->projet_id=$request->idpro;
    
   
    $phase->save();
  
  return redirect('projet');
  }

}
