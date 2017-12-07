<?php

use App\Property;
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property = new Property();
        $property->name = 'The Victoria';
        $property->price = 374662;
        $property->bedroom = 4;
        $property->bathroom = 2;
        $property->storey = 2;
        $property->garage = 2;
        $property->comment = 'This is comment for victoria';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Xavier';
        $property->price = 513268;
        $property->bedroom = 4;
        $property->bathroom = 2;
        $property->storey = 1;
        $property->garage = 2;
        $property->comment = 'This is comment for xavier';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Como';
        $property->price = 454990;
        $property->bedroom = 4;
        $property->bathroom = 3;
        $property->storey = 2;
        $property->garage = 3;
        $property->comment = 'This is comment for como';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Aspen';
        $property->price = 384356;
        $property->bedroom = 4;
        $property->bathroom = 3;
        $property->storey = 2;
        $property->garage = 2;
        $property->comment = 'This is comment for aspen';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Lucretia';
        $property->price = 572002;
        $property->bedroom = 4;
        $property->bathroom = 3;
        $property->storey = 2;
        $property->garage = 2;
        $property->comment = 'This is comment for lucretia';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Toorak';
        $property->price = 521951;
        $property->bedroom = 5;
        $property->bathroom = 2;
        $property->storey = 2;
        $property->garage = 2;
        $property->comment = 'This is comment for toorak';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Skyscap';
        $property->price = 263604;
        $property->bedroom = 3;
        $property->bathroom = 2;
        $property->storey = 2;
        $property->garage = 2;
        $property->comment = 'This is comment for skyscap';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Clifton';
        $property->price = 386103;
        $property->bedroom = 3;
        $property->bathroom = 2;
        $property->storey = 2;
        $property->garage = 1;
        $property->comment = 'This is comment for clifton';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();

        $property = new Property();
        $property->name = 'The Genva';
        $property->price = 390600;
        $property->bedroom = 4;
        $property->bathroom = 3;
        $property->storey = 2;
        $property->garage = 2;
        $property->comment = 'This is comment for genva';
        $property->created_at = '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->updated_at = '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31';
        $property->save();
    }
}
