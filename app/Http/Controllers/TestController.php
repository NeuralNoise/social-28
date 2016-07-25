<?php

namespace App\Http\Controllers;

use App\TestModel;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index(){
    	return view('dash');
    }

    public function testSave(Request $request){
    	$TestModel = new TestModel();
    	$TestModel->name = $request['name'];
    	$TestModel->email = $request['email'];
    	$TestModel->save();
    	return redirect('testView');
    }
}
