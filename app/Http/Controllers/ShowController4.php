<?php
namespace App\Http\Controllers;
use App\Representation;
use Illuminate\Http\Request;
use App\Show;
use App\Location;
use App\Locality;
use Illuminate\Http\uploadedFile;
use App\Http\Requests\showRequest;


class ShowController4 extends Controller
{
  
       public function __construct(){
        /*  $this->middleware('auth');
          */
        }

        /*

public function in(  ){
  return 'an jit';

}
*/
public function fillRep( Show $show ){ //pour recuperer une date correcte 

  $returnedArray = $this->api('Events/'.$show->id.'/Performances');

  foreach ($returnedArray['Performances'] as $value) {
    # code...
      $v = explode("T", $value['PerformanceDate']  );

      $c = implode(" ", $v);

      Representation::create([
        'id' => $value['PerformanceId'],
        'show_id' => $show->id,
        'location_id' => $show->location_id,
        'when' => $c
        ]);

  }
  
}


public function api($link){ 


    $url = "https://api-sandbox.londontheatredirect.com/rest/v2/".$link;
    $apiKey = 'gesjdrynjgev8gqd2rkb6pkz'; // should match with Server key


  $context = stream_context_create(array(
      'http' => array(
          'method' => 'GET',
          'header'=>"Content-type: application/json\r\n" .
                "Api-Key: ".$apiKey."\r\n",

          'timeout' => 60
      )
  ));

  $resp = file_get_contents($url, FALSE, $context);

  return json_decode($resp, true);
}

// hadi bach tsupprimer location 3an tariq l id 
  public function delete(Request $request,Show $id){
    $id->delete();
// hna bach y3ti l 9ima nhad ligen anaha memsou7a
    return response()->json(['response' => 'deleted']);

  }


  public function conf(){
    $exist = Show::pluck('id')->toJson();
return view('back.shows.confirm', compact( 'exist' ) );

/********************/

      $url = "https://api-sandbox.londontheatredirect.com/rest/v2/Events";
      $apiKey = 'gesjdrynjgev8gqd2rkb6pkz'; // should match with Server key


    $context = stream_context_create(array(
        'http' => array(
            'method' => 'GET',
            'header'=>"Content-type: application/json\r\n" .
                  "Api-Key: ".$apiKey."\r\n",

            'timeout' => 60000
        )
    ));

    //$resp = file_get_contents($url, FALSE, $context);

   // $decoded_resp = json_decode($resp, true);



      return view('back.shows.confirm', compact( 'exist' ) );
  }

  public function post(Request $request, $id){
// hna ghanfetech b id

/*
slug: name,
        location_id:VenueId,
        locality_id:locality_id,
        price:offerPrice
*/
// o bien sur b fadlek al3ziz

    $exist = Show::find( $id );

    if( !$exist){// hna ida kain had id ya3ni mojoud

/*slug: slug,
        location_id:location_id,
        title:title,
        poster_url:poster_url,
        price: price*/

          $array = [// hna ghir kan intializiw wa7d l array khawi  bach n3mlo chos creet wn3emlo fih 
              'id' => $id,
              'title' => $request->title,
              'slug' => $request->slug,
              'poster_url' => $request->poster_url,
              'price' => $request->price
            ];

// hna bach n3erfo wach had location_id exite deja f table locations
          $location_exist = Location::find( $request->location_id );

          if( $location_exist ){// hna bsara7a mafhamtchi chbaghi te3ml 
              $array['location_id'] = $location_exist->id ;
          }else{


          $decoded_resp = $this->api("Venues/".$request->location_id);// hna ghanjibo l id dyal venues


        $arrayLocation = [
            'id' => $decoded_resp['Venue']['VenueId'],
            'phone' => $decoded_resp['Venue']['Telephone'],
            'website' => $decoded_resp['Venue']['Email'],
            'address' => $decoded_resp['Venue']['Address'],
            'designation' => $decoded_resp['Venue']['Name'],
            'slug' => str_slug( $decoded_resp['Venue']['Name'] , '_' )
         ];




/*****************/

          $locality_exist = Locality::where('locality', $decoded_resp['Venue']['City'] )
            ->where('postal_code', $decoded_resp['Venue']['Postcode'] )
            ->first();

          if( $locality_exist ){// hna bsara7a mafhamtchi chbaghi te3ml 
              $arrayLocation['locality_id'] = $locality_exist->id ;
          }else{

            $locality = Locality::create([
              'locality' =>$decoded_resp['Venue']['City']  , 
              'postal_code' => $decoded_resp['Venue']['Postcode'] 
              ]);

            $arrayLocation['locality_id'] = $locality->id ;

          }



/********************/

  $location = Location::create($arrayLocation);

  $array['location_id'] = $location->id;

  $show = Show::create($array);
/**/




          }
// hna gha t creer locations walakin bghit nefham wach lma3na anak katsejla f base de donnée wla kif
          
          if( $show ){



              $this->fillRep( $show->id );
/*

              return response()->json([
              'id' => $show->id,
              'title' => $show->title,
              'slug' => $show->slug,
              'location_id' => $show->location_id,
              'poster_url' => $show->poster_url ,
              'price' => $show->price
                ]);
                */
        return response()->json(['response' => 'no problemme']);
          }else{
            return response()->json(['response' => 'problemme f location']);
          }
    }
     
  }









  public function fetch(){//makandonch

      $shows = Show::all();

      return view('back.shows.list', compact('shows')); 
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
   // $representation->when=$request->input('when');
    $representation->when = date('Y-m-d H:i:s', strtotime("$request->when_date $request->when_time"));
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
    //  $representation->when=$request->input('when');
      $representation->when = date('Y-m-d H:i:s', strtotime("$request->when_date $request->when_time"));
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