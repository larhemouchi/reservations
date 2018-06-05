<?php
namespace App\Http\Controllers;
use App\Representation;
use Illuminate\Http\Request;
use App\Show;
use Illuminate\Http\uploadedFile;
use App\Http\Requests\showRequest;
class ShowController extends Controller
{
  /*
       public function __construct(){
          $this->middleware('auth');
        }
*/

  public function conf(){
      return view('back.shows.confirm');
  }


     //pour lister les artists
   public function index(){
    $listeshow=Show::all();
    return view('show.index',['shows'=> $listeshow]);
   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('show.create');
   }
//enregistrer un artist
  public function store(showRequest $request){
    $show=new Show();
    $show->slug=str_slug($request->input('slug'));
    
    $show->title=$request->input('title');
    $show->poster_url=$request->input('poster_url');
    $show->location_id=$request->input('location_id');
    $show->bookable=$request->input('bookable');
    $show->price=$request->input('price');
if($request->hasFile('poster_url')){
   $show->poster_url= $request->poster_url->store('images');
  }
    $show->save();
    $representation=new Representation();
    $representation->show_id=$show->id;
    $representation->when=$request->input('when');
    $representation->location_id=$request->input('location_id');
    $representation->save();
    
    return redirect('shows');
   }
//pour recuperer un artiste puis le mettre dans le formulaire
    public function edit($id){
     
     $show =  Show::find($id);
     return view('show.edit',['show'=> $show]);
    
   }
//pour modifier un artist
      public function update(showRequest $request,$id){
      $show=Show::find($id);
      $representation = Representation::where('show_id',$show->id)->first();
      $representation->location_id=$request->input('location_id');
      $representation->when=$request->input('when');
      $representation->show_id=$show->id;
      $representation->save();
    
     $show->slug=str_slug($request->input('slug'));
      $show->title=$request->input('title');
      $show->poster_url=$request->input('poster_url');
      $show->location_id=$request->input('location_id');
      $show->bookable=$request->input('bookable');
      $show->price=$request->input('price');
if($request->hasFile('poster_url')){
   $show->poster_url= $request->poster_url->store('images');
  }
            $show->save();
            return redirect('shows');
   }
   //pour afficher un show
public function afficher($slug){
      $show =  Show::where('slug',$slug)->first();
      return view('show.afficher',['show'=> $show]);
    }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $show=Show::find($id);
      $show->delete();
      
      return redirect('shows');
}}