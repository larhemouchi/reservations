<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Representation;

use App\Show;

use App\Http\Requests\representationRequest;

class RepresentationController extends Controller
{
        public function __construct(){

          //$this->middleware('auth');
        }

        //public function conf(Show $show){
        public function conf($show){

            //walakin blati ana 3andi la table show khawiya ghanakhd ha lid bo7do
            //oui
          
            return view('back.representations.confirm', compact('show'));
        }





     //pour lister les artists
   public function index(){

   	$listerepresentation=Representation::all();
   	return view('representation.index',['representations'=> $listerepresentation]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('representation.create');

   }
//enregistrer un artist
   public function store(representationRequest $request){

   	$representation=new Representation();

           $representation->show_id=$request->input('show_id');
		    $representation->when=$request->input('when');
		    $representation->location_id=$request->input('location_id');
  

    $representation->save();

    return redirect('representations');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $representation =  Representation::find($id);
     return view('representation.edit',['representation'=> $representation]);
    

   }
//pour modifier un artist
       public function update(representationRequest $request,$id){

			$representation=Representation::find($id);

			$representation->show_id=$request->input('show_id');
		    $representation->when=$request->input('when');
		    $representation->location_id=$request->input('location_id');

            $representation->save();
            return redirect('representations');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $representation=Representation::find($id);

      $representation->delete();
      
      return redirect('representations');


}
}