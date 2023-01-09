<?php

namespace App\Http\Controllers;
use App\models\projet;
use Illuminate\Http\Request;


class ProjetController extends Controller
{
    public function vu(){

        $projet=projet::all();

        return view('projet',compact('projet'));
    }

// public function liste(){
 
// $projet=projet::all();

// return view('detail',compact('projet'));

// }

public function enregistrer(Request $request){

  $projet= new projet();

  $projet->nom=$request->nom;
  $projet->description=$request->description;
  $projet->datedebut=$request->datedebut;
  $projet->datefin=$request->datefin;
  
 
  $projet->save();

return redirect('projet');
}

public function detail(Request $request,$id)
{
   
 
  $projet = projet::find($id);


return view('detail',compact('projet'));

}






public function destroy(Request $request)
{
$projet = projet::findOrFail($request->idprojet);

$projet->delete();


return redirect('projet');
}

}

