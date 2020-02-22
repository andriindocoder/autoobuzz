<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuzzCarmaker;

class TestController extends Controller
{
    public function index() {
    	$carmaker = BuzzCarmaker::count();
    	echo "<pre>";
    	print_r($carmaker);
    	echo "</pre>";
    	die();
    }
}
