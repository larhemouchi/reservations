<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Location;
use App\Locality;

use App\Http\Requests\locationRequest;

class LocationController extends Controller
{


  public function __construct(){

          //$this->middleware('auth');
        }

  public function conf(){
   //3tini ghir les ids
      $exist = Location::pluck('id')->toJson();
      return view('back.locations.confirm', compact( 'exist' ) );
  }

  public function post(Request $request, $id){
// hna ghanfetech b id
    $exist = Location::find( $id );

    if( !$exist){// hna ida kain had id ya3ni mojoud

            $slug = str_slug( $request->slug2 , '_' );// slug ghankhaliw kol kelma wkelma mertabta b _

          $array = [// hna ghan3amro had table (array) b les données li ghanjibo men api 
              'id' => $request->id,
              'phone' => $request->phone,
              'website' => $request->website,
              'address' => $request->address,
              'designation' => $request->slug2,
             // 'locality_id'=>$request->locality_id,
            ];

          if( $slug ){// hadi mafhamtekchi chno bghiti te3ml
            $array['slug'] = $slug ;
          }else{
            $array['slug'] = 'slug' ;
          }
// hna ida fhamt b7al li kate3tih chemain absolu bach tqolo bli location_id howa id d  localities
          $locality_exist = Locality::where('locality', $request->locality_id )->where('postal_code', $request->postal_code )->first();

          if( $locality_exist ){// hna bsara7a mafhamtchi chbaghi te3ml 
              $array['locality_id'] = $locality_exist->id ;
          }else{

            $locality = Locality::create(['locality' => $request->locality_id  , 'postal_code' => $request->postal_code ]);

            $array['locality_id'] = $locality->id ;

          }
// hna gha t creer locations walakin bghit nefham wach lma3na anak katsejla f base de donnée wla kif
          $location = Location::create($array);
          if( $location ){
              return response()->json([
              'id' => $location->id,
              'phone' => $location->phone,
              'website' => $location->website,
              'address' => $location->address,
              'designation' => $location->designation,
              'slug' => $location->slug,
              'locality_id' => $location->locality_id

                ]);
          }else{
            return response()->json(['response' => 'problemme f location']);
          }
    }
     
  }


  /***************/
  // hadi bach tsupprimer location 3an tariq l id 
  public function delete(Request $request,Location $id){
    $id->delete();
// hna bach y3ti l 9ima nhad ligen anaha memsou7a
    return response()->json(['response' => 'deleted']);

  }

  /******************/



     //pour lister les artists
   public function index(){

   	$listelocation=Location::all();
   	return view('location.index',['locations'=> $listelocation]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('location.create');

   }
//enregistrer un artist
   public function store(locationRequest $request){

   	$location=new Location();

    
			$location->slug=$request->input('slug');
			$location->designation=$request->input('designation');
			$location->address=$request->input('address');
			$location->locality_id=$request->input('locality_id');
			$location->website=$request->input('website');
			$location->phone=$request->input('phone');
  

    $location->save();

    return redirect('locations');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $location =  Location::find($id);
     return view('location.edit',['location'=> $location]);
    

   }
//pour modifier un artist
       public function update(locationRequest $request,$id){

			$location=Location::find($id);

			$location->slug=$request->input('slug');
			$location->designation=$request->input('designation');
			$location->address=$request->input('address');
			$location->locality_id=$request->input('locality_id');
			$location->website=$request->input('website');
			$location->phone=$request->input('phone');
		

            $location->save();
            return redirect('locations');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $location=Location::find($id);

      $location->delete();
      
      return redirect('locations');
}
}