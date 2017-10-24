<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoPersonal;

class InfoPersonalController extends Controller
{
  function getInfoPersonalAlu(Request $request,$rut){
        $db = app('db');
        $results = $db->select("SELECT * FROM deudorfc where knumerut=".$rut. " ");
       
        return response()->json([
//            "contador" => count($results),
            "datos" => $results,
        ]);
   
        
//        return ([
//            "datos" => $results,
//        ]);
        
        
//        return json_encode($results);
        
   }
  function EditInfoPersonalAlu(Request $request,$rut){
        $db = app('db');
        $results = $db->select("UPDATE deudorfc SET 
                                
                                WHERE 
                                knumerut=".$rut. " ");
       
        return response()->json([
//            "contador" => count($results),
            "datos" => $results,
        ]);
   
        
//        return ([
//            "datos" => $results,
//        ]);
        
        
//        return json_encode($results);
        
   }
}
