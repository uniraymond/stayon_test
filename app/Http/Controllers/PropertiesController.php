<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Property::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new Property();
        $property->name = $request->name;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->storey = $request->storey;
        $property->garage = $request->garage;
        $property->price = $request->price;
        $property->comment = $request->comment;
        $property->save();

        return $property;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->name = $request->name;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->storey = $request->storey;
        $property->garage = $request->garage;
        $property->price = $request->price;
        $property->comment = $request->comment;
        $property->update();

        return $property;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return 204;
    }

    /**
     * Filter properties.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $properties = Property::filerBy($request);

        return $properties;
    }
}
