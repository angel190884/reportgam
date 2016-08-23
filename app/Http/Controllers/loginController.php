<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class loginController extends Controller
{
    public function store(Request $request)
    {
        $object = json_decode($request->get('data'));
        //dd($object);
        $user=$object->requestlogin[0]->correo;
        //dd($user);
        //$password=$object->requestlogin[0]->password;
        return  ['responselogin'    =>
                    [['response'  =>
                            ['status'=>'ok','error'=>'mensaje']
                    ]]
                ];
    }
}