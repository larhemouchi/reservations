<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

use App\Http\Requests\roleRequest;

class RoleController extends Controller
{
     public function __construct(){

          $this->middleware('auth');
        }
     //pour lister les artists
   public function index(){

   	$listerole=Role::all();
   	return view('role.index',['roles'=> $listerole]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('role.create');

   }
//enregistrer un artist
   public function store(roleRequest $request){

   	$role=new Role();

    $role->role=$request->input('role');
  

    $role->save();

    return redirect('roles');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $role =  Role::find($id);
     return view('role.edit',['role'=> $role]);
    

   }
//pour modifier un artist
       public function update(roleRequest $request,$id){

			$role=Role::find($id);

			$role->role=$request->input('role');
		

            $role->save();
            return redirect('roles');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $role=Role::find($id);

      $role->delete();
      
      return redirect('roles');


}
}