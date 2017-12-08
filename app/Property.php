<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $filtlable = ['name', 'bedroom', 'bathroom', 'storey', 'garage', 'price', 'comment'];

    protected $filter = ['id', 'name', 'bedroom', 'bathroom', 'storey', 'garage', 'price', 'comment'];

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
}
