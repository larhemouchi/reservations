<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;

use App\Http\Requests\artistRequest;

class ArtistController extends Controller
{
   public function __construct(){

          $this->middleware('auth');
        }
	//pour lister les artists
   public function index(){

   	$listeartist=Artist::all();
   	return view('artist.index',['artists'=> $listeartist]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('artist.create');

   }
//enregistrer un artist
   public function store(artistRequest $request){

   	$artist=new Artist();

    $artist->firstname=$request->input('firstname');
    $artist->lastname=$request->input('lastname');

    $artist->save();

    return redirect('artists');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $artist =  Artist::find($id);
     return view('artist.edit',['artist'=> $artist]);
    

   }
//pour modifier un artist
       public function update(artistRequest $request,$id){

			$artist=Artist::find($id);

			$artist->firstname=$request->input('firstname');
			$artist->lastname=$request->input('lastname');

            $artist->save();
            return redirect('artists');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $artist=Artist::find($id);

      $artist->delete();
      
      return redirect('artists');




   }

   

   }
