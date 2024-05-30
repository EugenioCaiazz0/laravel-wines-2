<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flavour;

class FlavoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents('database/externaldata/aromi-vini.json');
        $data=json_decode($json, true);
        $flavours = $data['aromi'];


        foreach ($flavours as $flavour){
            $new_flavour = new Flavour();
            $new_flavour->aroma=$flavour;
            $new_flavour->save();
        }
}
}
