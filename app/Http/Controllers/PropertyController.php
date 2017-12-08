<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $properties = Property::all();

        return response()->json([
            'properties' => $properties
        ]);
    }


    /**
     * Create a new property to storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $property = new Property();
        $property->name = $request->name;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->storey = $request->storey;
        $property->garage = $request->garage;
        $property->comment = $request->comment;
        $property->save();

        return $property;
    }

    /**
     * Update the specified property from the storage.
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->name = $request->name;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->storey = $request->storey;
        $property->garage = $request->garage;
        $property->comment = $request->comment;
        $property->update();

        return $property;
    }

    /**
     * Remove the specified property from storage.
     *
     * @param $id
     * @return Response
     */
    public function destory($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return 204;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function getData(Request $request)
    {
        return Property::latest()->get();
    }
}
