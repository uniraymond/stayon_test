<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    public static function initialize()
    {
        return [
            'id' => 'select',
            'name' => '',
            'bedroom' => '',
            'bathroom' => '',
            'storey' => '',
            'garage' => '',
            'price' => '',
            'comment' => ''
        ];
    }

    /**
     * Query filters
     *
     * name match on partial names
     * can check bedrooms, bathroom, storey and garage in request bedroom numbers at the same time
     * price is rang of price.
     *
     * @param $request
     * @return mixed
     */
    public static function filerBy($request)
    {
        $name = $bedroom = $bathroom = $storey = $garage = $prices = $minprice = $maxprice = '';

        if ($request->name) {
            $name = $request->name;
        }

        if ($request->bedroom) {

            $bedroom = explode(",", $request->bedroom);
        }

        if ($request->bathroom) {

            $bathroom = explode(",", $request->bathroom);
        }

        if ($request->storey) {

            $storey = explode(",", $request->storey);
        }

        if ($request->garage) {

            $garage = explode(",", $request->garage);
        }

        if ($request->minprice && $request->maxprice) {

            $prices = array($request->minprice, $request->maxprice);
        } elseif ($request->minprice && !$request->maxprice) {

            $minprice = $request->minprice;
        } elseif (!$request->minprice && $request->maxprice) {

            $maxprice = $request->maxprice;
        }

        $properties = DB::table('properties')
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->when($bedroom, function ($query) use ($bedroom) {
                return $query->whereIn('bedroom', $bedroom);
            })
            ->when($bathroom, function ($query) use ($bathroom) {
                return $query->whereIn('bathroom', $bathroom);
            })
            ->when($storey, function ($query) use ($storey) {
                return $query->whereIn('storey', $storey);
            })
            ->when($garage, function ($query) use ($garage) {
                return $query->whereIn('garage', $garage);
            })
            ->when($prices, function ($query) use ($prices) {
                return $query->whereBetween('price', $prices);
            })
            ->when($minprice, function ($query) use ($minprice) {
                return $query->where('price', '>=', $minprice);
            })
            ->when($maxprice, function ($query) use ($maxprice) {
                return $query->where('price', '<=', $maxprice);
            })
            ->orderBy('name')
            ->get();

        return $properties;
    }
}
