<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Location;

use App\Http\Requests\locationRequest;

class LocationController extends Controller
{


  public function __construct(){

          $this->middleware('auth');
        }
     //pour lister les artists
   public function index(){

   	$listelocation=Location::all();
   	return view('location.index',['locations'=> $listelocation]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('location.create');

   }
//enregistrer un artist
   public function store(locationRequest $request){

   	$location=new Location();

    
			$location->slug=$request->input('slug');
			$location->designation=$request->input('designation');
			$location->adresse=$request->input('adresse');
			$location->locality_id=$request->input('locality_id');
			$location->website=$request->input('website');
			$location->phone=$request->input('phone');
  

    $location->save();

    return redirect('locations');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $location =  Location::find($id);
     return view('location.edit',['location'=> $location]);
    

   }
//pour modifier un artist
       public function update(locationRequest $request,$id){

			$location=Location::find($id);

			$location->slug=$request->input('slug');
			$location->designation=$request->input('designation');
			$location->adresse=$request->input('adresse');
			$location->locality_id=$request->input('locality_id');
			$location->website=$request->input('website');
			$location->phone=$request->input('phone');
		

            $location->save();
            return redirect('locations');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $location=Location::find($id);

      $location->delete();
      
      return redirect('locations');
}
}