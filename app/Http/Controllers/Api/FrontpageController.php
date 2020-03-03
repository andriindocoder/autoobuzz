<?php

namespace App\Http\Controllers\Api;

use App\BuzzCarmaker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $make = BuzzCarmaker::orderBy('name')->get();
        return $make;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
        return 
        [
            'slug' => $slug,
            'description' => $brandDescription,
            'data' => $subCat
        ];
        
    }
}