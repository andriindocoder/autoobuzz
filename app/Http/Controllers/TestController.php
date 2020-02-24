<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuzzCarmaker;
use GuzzleHttp\Client;

class TestController extends Controller
{
    public function index() {
    	$carmaker = BuzzCarmaker::count();
    	echo "<pre>";
    	print_r($carmaker);
    	echo "</pre>";
    	die();
    }

    public function testApi() {
    	        header('Access-Control-Allow-Origin: *');
    	        $url = "http://localhost:8000/api/front-page";
    	        $response = file_get_contents($url);
    	        $data = json_decode($response,true);
    	        return $data;
    }


}
