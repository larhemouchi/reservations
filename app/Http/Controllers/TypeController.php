<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;
use App\Http\Requests\typeRequest;

class TypeController extends Controller
{
       public function __construct(){

          $this->middleware('auth');
        }
    //pour lister les artists
   public function index(){

   	$listetype=Type::all();
   	return view('type.index',['types'=> $listetype]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('type.create');

   }
//enregistrer un artist
   public function store(typeRequest $request){

   	$type=new Type();

    $type->type=$request->input('type');
  

    $type->save();

    return redirect('types');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $type =  Type::find($id);
     return view('type.edit',['type'=> $type]);
    

   }
//pour modifier un artist
       public function update(typeRequest $request,$id){

			$type=Type::find($id);

			$type->type=$request->input('type');
		

            $type->save();
            return redirect('types');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $type=Type::find($id);

      $type->delete();
      
      return redirect('types');




   }
}
