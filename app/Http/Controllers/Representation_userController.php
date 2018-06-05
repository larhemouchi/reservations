<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Representation_user;

use App\Http\Requests\representation_userRequest;

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
      
$listerepresentation_user=Auth::user()->representation_users;

}
   	return view('representation_user.index',['representation_users'=> $listerepresentation_user]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('representation_user.create');

   }
//enregistrer un artist
   public function store(representation_userRequest $request){

   	$representation_user=new Representation_user();

    $representation_user->representation_id=$request->input('representation_id');
    $representation_user->user_id=Auth::user()->id;
      $representation_user->places=$request->input('places');

   
      
    $representation_user->save();

    return redirect('representation_users');

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
            return redirect('representation_users');

   }

   public function afficher($id){
      $representation_user =  Representation_user::where('id',$id)->first();
      return view('representation_user.afficher',['representation_user'=> $representation_user]);
    }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $representation_user=Representation_user::find($id);

      $representation_user->delete();
      
      return redirect('representation_users');

}
}