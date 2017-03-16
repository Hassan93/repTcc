<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monografia;
use App\Area;

class VisitantesController extends Controller
{
    public function index()
    {
    	$areas = Area::all();
    	$monografias = Monografia::where('estado', '=', 'Publicada')->orderBy('id', 'desc')->paginate(5);
    	return view('homes.visitante')->withAreas($areas)->withMonografias($monografias);
    }

public function getMonografias(Request $request){
  		$areas = Area::all();
  		$autor = $request->input('autor');
  		$titulo =$request->input('titulo');
  		$area = $request->input('area');
		
  		if ($area == -1) {
		  		if ($autor!="" && $titulo!="") {
		  			$monografias = Monografia::where('autor', 'like', '%'.$autor.'%')
								 			  ->where('titulo', 'like', '%'.$titulo.'%')
				                        	  ->where('estado', '=', 'Publicada')->paginate(5);
		 
		  		}elseif ($autor!="") {
		  			$monografias = Monografia::where('autor', 'like', '%'.$autor.'%')
				                        	  ->where('estado', '=', 'Publicada')->paginate(5);
		   		}else{
		   			$monografias = Monografia::where('titulo', 'like', '%'.$titulo.'%')
								 			   ->where('estado', '=', 'Publicada')->paginate(5);
		   		
		   	}
  		}else{
		   			$areaC =Area::find($area);
		   		if ($autor!="" && $titulo!="") {
  			$monografias = Monografia::where('autor', 'like', '%'.$autor.'%')
						 			  ->where('titulo', 'like', '%'.$titulo.'%')
						 			  ->where('area_id', '=', $areaC->id)
		                        	  ->where('estado', '=', 'Publicada')->paginate(5);
 
  		}elseif ($autor!="") {
  			$monografias = Monografia::where('autor', 'like', '%'.$autor.'%')
  									  ->where('area_id', '=', $areaC->id)
		                        	  ->where('estado', '=', 'Publicada')->paginate(5);
   		}elseif ($titulo!="") {
   			$monografias = Monografia::where('titulo', 'like', '%'.$titulo.'%')
						 			  ->where('area_id', '=', $areaC->id)
		                        	  ->where('estado', '=', 'Publicada')->paginate(5);
 
   		}else{
   			$monografias = Monografia::where('area_id', '=', $areaC->id)
		                        	  ->where('estado', '=', 'Publicada')->paginate(5);
 

   		}

		   		}
  		  		
	return view('homes.visitante')->withAreas($areas)->withMonografias($monografias);	

}

}
