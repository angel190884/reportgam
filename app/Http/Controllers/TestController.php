<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Testing\WithoutMiddleware;


class TestController extends Controller
{
    /**
     * TestController constructor.
     */
    public function __construct(){

    }
    public function index($operstion)
    {
        return "get";
    }
    public function test($operation){
        return "recibi=". $operation;
    }
}
