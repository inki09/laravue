<?php

use Illuminate\Database\Seeder;

class MapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('provinces')->truncate();
        $provinces = [
                    1 => 'Antananarivo',
                    2 => 'Toamasina',
                    3 => 'Fianarantsoa',
                    4 => 'Antsiranana',
                    5 => 'Mahajanga',
                    6 => 'Toliara'
        ];
        foreach ($provinces as $k => $value){
            \App\Models\Province::create([
                'id' => $k,
                'province_name' => $value
            ]);
        }



    }
}
