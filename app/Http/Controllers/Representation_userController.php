<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Representation_user;

use App\Http\Requests\representation_userRequest;

use App\Representation;

class Representation_userController extends Controller
{

     public function __construct(){

          $this->middleware('auth');
        }

     //pour lister les artists
   public function index(){
     
     if(Auth::user()->role_id == 1){// cet condition sert a  afficher tout les representations user 
                                     //de tout le monde et cet option juste pour l'admin ( role_id=1)
      $listerepresentation_user = Representation_user::all();
     } else{
      
$listerepresentation_user=Auth::user()->representation_user;

}
   	return view('representation_user.index',['representation_user'=> $listerepresentation_user]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('representation_user.create');

   }
/*
  public function reserver(representation_userRequest $request){

    $representation_user=new Representation_user();

    $representation_user->representation_id=$request->input('representation_id');
    $representation_user->user_id=Auth::user()->id;
      $representation_user->places=$request->input('places');
    $representation_user->save();

    return redirect('representation_user');


   }*/

//enregistrer un artist
   public function store(Request $request, $var){



      $rep = Representation::find($var);

      $rep_user = Representation_user::create(['representation_id' => $rep->id,
        'user_id' => Auth::id(),
        'places' => $request->places
        ]);

      return 'vous avez reserver'. $request->places .' place dans se repesentation ='. $rep->show->title;






   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $representation_user =  Representation_user::find($id);

     $this->authorize('update',$representation_user);
     
     return view('representation_user.edit',['representation_user'=> $representation_user]);
    

   }
//pour modifier un artist
       public function update(representation_userRequest $request,$id){

			$representation_user=Representation_user::find($id);

			$representation_user->representation_id=$request->input('representation_id');
      //$representation_user->user_id=$request->input('user_id');
      $representation_user->places=$request->input('places');
		

            $representation_user->save();
            return redirect('representation_user');

   }

   
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $representation_user=Representation_user::find($id);

      $representation_user->delete();
      
      return redirect('representation_user');

}
}