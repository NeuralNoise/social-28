<?php

namespace App\Http\Controllers;
//require '../vendor/autoload.php';
use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use App;
use Session;

class TestApiController extends Controller
{
    public function getTest(){
      require '../vendor/autoload.php';

      //$client = new GuzzleHttp\Client();
      $myClient = new GuzzleHttp\Client([
        'headers' => ['User-agent' => 'MyReader']
      ]);

      dd('exit');
      return view('testApi');
    }

    public function demoLocal(Request $request, $locale=''){
      App::setLocale($locale);
      // App::setLocale(session('locale'));
      // Session::forget('locale');
      return view('demoLocal');
    }
}
