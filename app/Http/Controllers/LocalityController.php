<?php

namespace App\Http\Controllers;

use App\Locality;
use Illuminate\Http\Request;
use App\Http\Requests\localityRequest;

class LocalityController extends Controller
{
  
public function __construct(){

          $this->middleware('auth');
        }
  
     //pour lister les artists
   public function index(){

   	$listelocalitie=Locality::all();
   	return view('locality.index',['localities'=> $listelocalitie]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('locality.create');

   }
//enregistrer un artist
   public function store(localityRequest $request){

   	$locality=new Locality();

            $locality->postal_code=$request->input('postal_code');
			$locality->locality=$request->input('locality');
  

    $locality->save();

    return redirect('localitie');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $locality =  Locality::find($id);
     return view('locality.edit',['locality'=> $locality]);
    

   }
//pour modifier un artist
       public function update(localityRequest $request,$id){

			$locality=Locality::find($id);

			$locality->postal_code=$request->input('postal_code');
			$locality->locality=$request->input('locality');
		

            $locality->save();
            return redirect('localities');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $locality=Locality::find($id);

      $locality->delete();
      
       return redirect('localities');


   }

}