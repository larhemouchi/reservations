<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artiste_type;
use App\Http\Requests\artiste_typeRequest;

class Artiste_typeController extends Controller
{

     public function __construct(){

          $this->middleware('auth');
        }
    //pour lister les artists
   public function index(){

    $listeartiste_type=Artiste_type::all();
    return view('artiste_type.index',['artiste_type'=> $listeartiste_type]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('artiste_type.create');

   }
//enregistrer un artist
   public function store(artiste_typeRequest $request){

    $artiste_type=new Artiste_type();

    $artiste_type->artist_id=$request->input('artist_id');
    $artiste_type->type_id=$request->input('type_id');

    $artiste_type->save();

    return redirect('artiste_type');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $listeartiste_type =  Artiste_type::find($id);
     return view('artiste_type.edit',['artiste_type'=> $listeartiste_type]);
    

   }
//pour modifier un artist
       public function update(artiste_typeRequest $request,$id){

      $artiste_type=Artiste_type::find($id);

      $artiste_type->artist_id=$request->input('artist_id');
            $artiste_type->type_id=$request->input('type_id'); 

            $artiste_type->save();
            return redirect('artiste_type');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $artiste_type=Artiste_type::find($id);

      $artiste_type->delete();
      
      return redirect('artiste_type');




   }
}
