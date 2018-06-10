<?php
namespace App\Http\Controllers;
use App\Representation;
use Illuminate\Http\Request;
use App\Show;
use App\Location;
use App\Locality;
use Illuminate\Http\uploadedFile;
use App\Http\Requests\showRequest;


class ShowController extends Controller
{
  /*
       public function __construct(){
          $this->middleware('auth');
        }
*/
public function testapi(){
/*"url": "https://api-sandbox.londontheatredirect.com/rest/v2/Venues",   
            //header bach ngolou lou bghina JSON   
            "contentType": "application/j*/
  //Server url
  $url = "https://api-sandbox.londontheatredirect.com/rest/v2/Venues/85";
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

$decoded_resp = json_decode($resp, true);
dd($decoded_resp['Venue']);
}



  public function conf(){
    $exist = Show::pluck('id')->toJson();
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

            $slug = str_slug( $request->slug , '_' );// slug ghankhaliw kol kelma wkelma mertabta b _

          $array = [// hna ghan3amro had table (array) b les données li ghanjibo men api 
              'id' => $id,
              'title' => $request->slug,
              'slug' => $slug,
              'poster_url' => $request->img,
              'price' => $request->price
            ];

// hna ida fhamt b7al li kate3tih chemain absolu bach tqolo bli location_id howa id d  localities
          $location_exist = Location::find( $request->location_id );

          if( $location_exist ){// hna bsara7a mafhamtchi chbaghi te3ml 
              $array['location_id'] = $location_exist->id ;
          }else{

/*******************************/


  $url = "https://api-sandbox.londontheatredirect.com/rest/v2/Venues/".$request->location_id;
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

$decoded_resp = json_decode($resp, true);

/*'id' => $request->id,
              'phone' => $request->phone,
              'website' => $request->website,
              'address' => $request->address,
              'designation' => $request->slug2
            ];*/

/*******************************/

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
              return response()->json([
              'id' => $show->id,
              'title' => $show->title,
              'slug' => $show->slug,
              'poster_url' => $show->poster_url ,
              'price' => $show->price
                ]);
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