<?php

namespace App\Http\Controllers;
use App\BuzzCarmaker;

class FrontpageController extends Controller
{
    public function index()
    {
        $makes = BuzzCarmaker::orderBy('name')->get()->toArray();
        $carmake = collect($makes);
        $brand = $carmake->pluck('name');

        return view('front', compact('carmake', 'brand'));
    }

    public function category($category)
    {
        $category = BuzzCarmaker::where('niceName', $category)->first();
        $slug = $category->niceName;
        $brandDescription = $category->brandDescription->brandDescription;
        $subCat = [];
        foreach ($category->models as $model) {
            foreach ($model->modelYears as $year) {
                $subCat[] = [
                    'id' => $year->brandModelYearId,
                    'name' => $year->brandModelYear . ' ' . $category->name . ' ' . $model->modelName
                ];
            }
        }

        $theCategory = [
            'slug' => $slug,
            'description' => $brandDescription,
            'data' => $subCat
        ];

        echo "<pre>";
        print_r($theCategory);
        echo "</pre>";
        die();
        
    }
}