<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class TestApiController extends Controller
{
    public function getTest(){
      $client = new GuzzleHttp\Client();

      dd('exit');
      return view('testApi');
    }
}
