<?php

namespace App\Http\Controllers;

class FrontpageController extends Controller
{
    public function index()
    {
        $makes = $this->getApiCarMake();
        $carmake = collect($makes);
        $brand = $carmake->pluck('name');

        return view('front', compact('carmake', 'brand'));
    }

    protected function getApiCarMake()
    {
        header('Access-Control-Allow-Origin: *');
        $url = "http://localhost:8000/api/front-page";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        return $data;
    }

    protected function getApiCategory($category)
    {
        header('Access-Control-Allow-Origin: *');
        $url = "http://localhost:8000/api/category/{$category}";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        return $data;
    }

    public function category($category)
    {
        $cat = $this->getApiCategory($category);
        echo "<pre>";
        print_r($cat);
        echo "</pre>";
        die();
    }
}