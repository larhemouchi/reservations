<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests\userRequest;

class UserController extends Controller
{
    
       public function __construct(){

          $this->middleware('auth');
        }
    //pour lister les artists
   public function index(){

   	$listeuser=User::all();
    
   	return view('user.index',['users'=> $listeuser]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('user.create');

   }
//enregistrer un artist
   public function store(userRequest $request){

   	$user=new User();

  $user->login=$request->input('login');
  $user->password=$request->input('password');
 $user->role_id=2;
  $user->firstname=$request->input('firstname');
  $user->lastname=$request->input('lastname');
  $user->email=$request->input('email');
  $user->langue=$request->input('langue');

    $user->save();

    return redirect('users');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $user =  User::find($id);
     return view('user.edit',['user'=> $user]);
    

   }
//pour modifier un artist
       public function update(userRequest $request,$id){

			$user=User::find($id);

  $user->login=$request->input('login');
  $user->password=$request->input('password');
  $user->role_id=$request->input('role_id');
  $user->firstname=$request->input('firstname');
  $user->lastname=$request->input('lastname');
  $user->email=$request->input('email');
  $user->langue=$request->input('langue');
		

            $user->save();
            return redirect('users');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $user=User::find($id);

      $user->delete();
      
      return redirect('users');




   }
}
