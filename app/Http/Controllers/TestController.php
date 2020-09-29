<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
class TestController extends Controller
{
	// public function __construct(){
	// 	$this->middleware('dateMiddleware');
	// }
    public function test()
    {
    	return 'berhasil';
    }

	public function route1()
    {
    	return 'Ini route1';
    }
    public function route2()
    {
    	return 'ini route 2';
    }
    public function route3()
    {
    	return 'ini route 3';
    }
}
