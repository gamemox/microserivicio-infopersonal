<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoPersonal;

class InfoPersonalController extends Controller
{
  function getInfoPersonalAlu(Request $request,$rut){
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Access-Control-Allow-Credentials: true');  

    $db = app('db');
    $results = $db->select("SELECT D.*
                        ,(SELECT ROUND(PORCENTAJE1/100,3)PORCENTAJE1  FROM CRUZADOS_CONSOLIDADOS C WHERE C.KNUMERUT=D.KNUMERUT)PORCENTAJE1
                        ,(SELECT  NOMBRE_CORTO AS NOMBRE_CORTO1  FROM CRUZADOS_CONSOLIDADOS C, UNIVERSIDADES U WHERE KNUMERUT=D.KNUMERUT AND UCONDEU1=CODIGO_PROJECT)NOMBRE_CORTO1
                        ,(SELECT ROUND(PORCENTAJE2/100,3)PORCENTAJE2  FROM CRUZADOS_CONSOLIDADOS C WHERE C.KNUMERUT=D.KNUMERUT)PORCENTAJE2
                        ,(SELECT  NOMBRE_CORTO AS NOMBRE_CORTO2  FROM CRUZADOS_CONSOLIDADOS C, UNIVERSIDADES U WHERE KNUMERUT=D.KNUMERUT AND UCONDEU1=CODIGO_PROJECT)NOMBRE_CORTO2
                        ,(SELECT ROUND(PORCENTAJE3/100,3)PORCENTAJE3  FROM CRUZADOS_CONSOLIDADOS C WHERE C.KNUMERUT=D.KNUMERUT)PORCENTAJE3
                        ,(SELECT  NOMBRE_CORTO AS NOMBRE_CORTO3  FROM CRUZADOS_CONSOLIDADOS C, UNIVERSIDADES U WHERE KNUMERUT=D.KNUMERUT AND UCONDEU1=CODIGO_PROJECT)NOMBRE_CORTO3
                        ,(SELECT ROUND(PORCENTAJE4/100,3)PORCENTAJE4  FROM CRUZADOS_CONSOLIDADOS C WHERE C.KNUMERUT=D.KNUMERUT)PORCENTAJE4
                        ,(SELECT  NOMBRE_CORTO  AS NOMBRE_CORTO4  FROM CRUZADOS_CONSOLIDADOS C, UNIVERSIDADES U WHERE KNUMERUT=D.KNUMERUT AND UCONDEU1=CODIGO_PROJECT)NOMBRE_CORTO4
                        FROM DEUDORFC D
                        WHERE D.KNUMERUT=".$rut. " "); 
    return  json_encode($results);   
  } 
  
//  function getEditInfoPersonalAlu(Request $request,$rut){
//    header("Access-Control-Allow-Origin: *");
//    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
//    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
//    header('Access-Control-Allow-Credentials: true');              
////    $this->validate($request, [
////        'email'  => 'required',
////        'password' => 'sometimes',
////        'name'  => 'required',
////        'address' => 'required',
////        'phone'  => 'required'
////    ]); 
//
//    $db = app('db');
//    $results = $db->select("SELECT * from deudorfc WHERE D.KNUMERUT=".$rut);
//    
//    
//    
//    $user    = InfoPersonal::find($rut);
//    $user->email   = $request->input('email');
//    $user->name   = $request->input('name');
//    $user->address   = $request->input('address');
//    $user->phone   = $request->input('phone');
//    $user->save();
//  }
}
