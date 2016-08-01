<?php

namespace App\Http\Controllers;

use App\TestModel;
use DB;
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

    public function getTest(){
        $testall = TestModel::get()->all();
        

        //$testall = DB::select('select * from test_models where id=1');
        //$testall = DB::select('select * from test_models where ?',[1]);
        //$testall = DB::select('select * from test_models where id=2 and name="Amanullah Aman"');
        
        foreach($testall as $t){
            echo $t->name.'- ';
            echo $t->email.'<br>';
        }
    }
}
