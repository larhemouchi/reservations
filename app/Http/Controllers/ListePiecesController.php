<?php
namespace App\Http\Controllers;
use App\Http\Requests\listePiecesRequest;
use App\listePieces;
use Illuminate\Http\Request;
class ListePiecesController extends Controller
{
    public function index(){
    	//link site
        $ListUrl='https://api.theatredelaville-paris.com/events';
        // li jak mn link 7ato fl file
       $maps_json= file_get_contents($ListUrl);
       //decodi dakchi li jak f array
       $arr=json_decode($maps_json,true);
       //lo7liya dak l array f l view
        return view('piece.listPiece')->with('maps_json',$arr);
    }
}
