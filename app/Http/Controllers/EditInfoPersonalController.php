<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoPersonal;

class EditInfoPersonalController extends Controller
{
  function getEditInfoPersonalAlu(Request $request){
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Access-Control-Allow-Credentials: true');              


    //$findObjet=InfoPersonal::where('KNUMERUT','=',$request->input("knumerut"))->first();
//    
//    if($findObjet!=null){
//        $findObjet->apaterno=$request->input('apaterno');
//        $findObjet->save();
//        return  json_encode("ok");
//    }else{
//        return  json_encode("no");
//    }
    return json_encode("no");
    
    
//    $user    = InfoPersonal::find($rut);
//    $user->email   = $request->input('email');
//    $user->name   = $request->input('name');
//    $user->address   = $request->input('address');
//    $user->phone   = $request->input('phone');
//    $user->save();
  }
}
