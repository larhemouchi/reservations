<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Representation;
use App\Representation_user;

use App\Show;
use App\Location;

use App\Http\Requests\representationRequest;

use Carbon\Carbon;

class RepresentationController extends Controller
{
        public function __construct(){

        $this->middleware('auth');
        }

        //public function conf(Show $show){
        public function conf($show){

            //walakin blati ana 3andi la table show khawiya ghanakhd ha lid bo7do
            //oui

            return view('back.representations.confirm', compact('show'));
        }

/***********************************************/
     //pour lister les artists
   public function index(){

   	$listerepresentation=Representation::all();
   	return view('representation.index',['representations'=> $listerepresentation]);

   }
//afficher le formulaire de creation d'artist
   public function create(){

    $shows = Show::pluck('title', 'id')->toArray();// hadi bach nemchi njib men table show kol 
    $locations = Location::pluck('slug', 'id')->toArray();
return view('representation.create',compact('shows','locations'));

   }
//enregistrer un artist
   public function store(representationRequest $request){

   	$representation=new Representation();

           $representation->show_id=$request->input('show_id');
		   // $representation->when=$request->input('when');
           $representation->when = date('Y-m-d H:i:s', strtotime("$request->when_date $request->when_time"));
		    $representation->location_id=$request->input('location_id');
  

    $representation->save();
    

    return redirect('representations');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     $shows = Show::pluck('title', 'id')->toArray();// hadi bach nemchi njib men table show kol 
    $locations = Location::pluck('slug', 'id')->toArray();
     $representation =  Representation::find($id);
     return view('representation.edit',compact('shows','locations', 'representation'));
    
return redirect('representations');
   }
//pour modifier un artist
       public function update(representationRequest $request,$id){

			$representation=Representation::find($id);

			$representation->show_id=$request->input('show_id');
		   // $representation->when=$request->input('when');
       $representation->when = date('Y-m-d H:i:s', strtotime("$request->when_date $request->when_time"));
		    $representation->location_id=$request->input('location_id');

            $representation->save();
            return redirect('representations');

   }
 /*public function afficher($id)
    {
        $show = Show::where('id', $id)->first();
        return view('show.afficher', ['show' => $show]);
    }*/

    public function afficher($id){
    $representation = Representation::where('id', $id)->first();
        return view('representation.afficher', ['representation' => $representation]);
    }

//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $representation=Representation::find($id);

      $representation->delete();
      
      return redirect('representations');


}
}