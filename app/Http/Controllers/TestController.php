<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class TestController extends Controller
{
    /**
     * TestController constructor.
     */
    public function __construct(){

    }
    public function index()
    {
        $json='{"loginuser":[{"user":"My Name","password":"My Password"},{"message":"Any Message"}]}';
        $var=json_decode($json);
        $user=$var->loginuser[0]->user;
        $password=$var->loginuser[0]->password;
        return ['responsewebservice'    =>  [['userdata'  => $user.' '.$password],
                                            ['message'   =>  'Mi Mensaje'],
                                            ['error'     =>  'mi mensaje de error si es que exite']]
        ];
    }

    public function store(Request $request)
    {
        $var=json_decode($json);
        $user=$var->loginuser[0]->user;
        $password=$var->loginuser[0]->password;
        return ['responsewebservice'    =>  [
                                                ['userdata'  => $user.' '.$password],
                                                ['message'   =>  'Mi Mensaje'],
                                                ['error'     =>  'mi mensaje de error si es que exite']
                                            ]];
    }
}
;