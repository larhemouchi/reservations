<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Show;
use App\Category;





class CategoryController extends Controller
{
        public function __construct(){

        $this->middleware('auth');
        }


 public function conf(){
   //3tini ghir les ids
      $exist = Category::pluck('id')->toJson();
      return view('back.category.confirm', compact( 'exist' ) );
  }

  public function post(Request $request, $id){
// hna ghanfetech b id
    $exist = Category::find( $id );

    if( !$exist){// hna ida kain had id ya3ni mojoud

         

          $array = [// hna ghan3amro had table (array) b les données li ghanjibo men api 
              'id' => $request->id,
              'name_category' => $request->name_category,
           
             // 'locality_id'=>$request->locality_id,
            ];

// hna ida fhamt b7al li kate3tih chemain absolu bach tqolo bli location_id howa id d  localities
         
// hna gha t creer locations walakin bghit nefham wach lma3na anak katsejla f base de donnée wla kif
          $category = Category::create($array);
          if( $category ){
              return response()->json([
              'id' => $category->id,
              'name_category' => $category->name_category,
          

                ]);
          }else{
            return response()->json(['response' => 'problemme f category']);
          }
    }
     
  }


  /***************/
  // hadi bach tsupprimer location 3an tariq l id 
  public function delete(Request $request,Category $id){
    $id->delete();
// hna bach y3ti l 9ima nhad ligen anaha memsou7a
    return response()->json(['response' => 'deleted']);

  }

  /******************/



     //pour lister les artists
   public function index(){

   	$listecategory=Category::all();
   	return view('category.index',['category'=> $listecategory]);

   }
//afficher le formulaire de creation d'artist
   public function create(){
return view('category.create');

   }
//enregistrer un artist
   public function store(categoryRequest $request){

   	$category=new Category();

    
			$category->name_category=$request->input('name_category');
		
  

    $category->save();

    return redirect('category');

   }
//pour recuperer un artiste puis le mettre dans le formulaire

    public function edit($id){
     
     $category =  Category::find($id);
     return view('category.edit',['category'=> $category]);
    

   }
//pour modifier un artist
       public function update(categoryRequest $request,$id){

			$category=category::find($id);

			$category->name_category=$request->input('name_category');
	
		

            $category->save();
            return redirect('category');

   }
//pour supprimer un artist
   public function destroy(Request $request,$id){
     
      $category=Category::find($id);

      $category->delete();
      
      return redirect('category');
}
}