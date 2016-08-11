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
    public function index($var="valor de var1")
    {
        return $var;
    }

    public function store(Request $request)
    {
        $operation=$request->input('operation');
        return $operation;
    }
}
