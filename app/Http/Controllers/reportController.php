<?php

namespace App\Http\Controllers;

use App\Section;
use App\SubSection;
use Illuminate\Http\Request;
class reportController extends Controller
{
    public function store(Request $request){
        $object = json_decode($request->get('data'));
        //$array  = json_decode($request->get('data') , 1 );

        //FORMA DE ACCESAR A LOS PARAMETRO DE JSON
        //dd($object->requestreport[0]->map->coordinatex);


       return ['responsereport'    =>  [['response'   => ['status'=>'ok','error'=>'mensaje']]]];

    }
}
