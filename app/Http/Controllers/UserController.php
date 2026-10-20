<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
 public function Users()
 {
    //  $index=[['id'=>1,"name"=>"momk"],['id'=>2,"name"=>"mk"],['id'=>3,"name"=>"m33k"]];

    // foreach($index as $i)
    //     echo $i['id'] . " " . $i["name"];

    //return response()->json($index);
 }

 public function Check(int $idw)
 {
    if($idw>10)
    return response()->json(['message'=>'nigg'],403);
    else
    return response()->json(['message'=>'heyyyy']);
     
 }
}
