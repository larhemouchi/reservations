<?php

namespace App\Http\Controllers;

use App\Localitie;
use Illuminate\Http\Request;
use App\Http\Requests\localitieRequest;

class LocalitieController extends Controller
{
public function __construct(){

          $this->middleware('auth');
        }

  
     //pour lister les artists
   public function index(){

   	$listelocalitie=Localitie::all();
   	return view('localitie.index',['localities'=> $listelocalitie]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('localitie.create');

   }
//enregistrer un artist
   public function store(localitieRequest $request){

   	$localitie=new Localitie();

            $localitie->postal_code=$request->input('postal_code');
			$localitie->locality=$request->input('locality');
  

    $localitie->save();

    return redirect('localities');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $localitie =  Localitie::find($id);
     return view('localitie.edit',['localitie'=> $localitie]);
    

   }
//pour modifier un artist
       public function update(localitieRequest $request,$id){

			$localitie=Localitie::find($id);

			$localitie->postal_code=$request->input('postal_code');
			$localitie->locality=$request->input('locality');
		

            $localitie->save();
            return redirect('localities');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $localitie=Localitie::find($id);

      $localitie->delete();
      
       return redirect('localities');


   }

}