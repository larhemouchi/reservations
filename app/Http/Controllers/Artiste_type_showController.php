<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artiste_type_show;

use App\Http\Requests\artiste_type_showRequest;

class Artiste_type_showController extends Controller
{
        public function __construct(){

          $this->middleware('auth');
        }


     //pour lister les artists
   public function index(){

   	$liste_artiste_type_show=Artiste_type_show::all();
   	return view('artiste_type_show.index',['artiste_type_shows'=> $liste_artiste_type_show]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('artiste_type_show.create');

   }
//enregistrer un artist
   public function store(artiste_type_showRequest $request){

   	$artiste_type_show=new Artiste_type_show();

    $artiste_type_show->artiste_type_id=$request->input('artiste_type_id');
    $artiste_type_show->show_id=$request->input('show_id');

    $artiste_type_show->save();

    return redirect('artiste_type_shows');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $artiste_type_show =  Artiste_type_show::find($id);
     return view('artiste_type_show.edit',['artiste_type_show'=> $artiste_type_show]);
    

   }
//pour modifier un artist
       public function update(artiste_type_showRequest $request,$id){

			$artiste_type_show=Artiste_type_show::find($id);

		$artiste_type_show->artiste_type_id=$request->input('artiste_type_id');
    $artiste_type_show->show_id=$request->input('show_id');

            $artiste_type_show->save();
            return redirect('artiste_type_shows');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $artiste_type_show=Artiste_type_show::find($id);

      $artiste_type_show->delete();
      
      return redirect('artiste_type_shows');




   }
}
