<?php
/**
 * Created by PhpStorm.
 * User: Allur-11
 * Date: 06/11/2019
 * Time: 15:51
 */

namespace App\Manager\MapManager;


use App\Models\Commune;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class MapManager implements MapManagerInterface
{
    /**
     * @return array
     */
    public function getAllProvinces(){
        $provinces=  Province::all();
        return $provinces->toArray();
    }

    /**
     * @return array
     */
    public function getAllRegions(){
        $regions = Region::all();
        return $regions->toArray();
    }

    /**
     * @return array
     */
    public function getAllCommunes(){
        $communes = Commune::all();
        return $communes->toArray();
    }

    /**
     * @param $province_id
     * @return mixed
     */
    public function getRegionsWithIdProvinces($province_id){
        $province = Province::findOrFail($province_id);
        return $province->regions->toArray();
    }

    /**
     * @param $regions_id
     * @return mixed.
     */
    public function getCommunesWithIdRegions($regions_id){
        $region  = Region::findOrFail($regions_id);
        return $region->communes->toArray();
    }

    /**
     * @param $province_id
     * @return \Illuminate\Support\Collection
     */
    public function getCommunesWithIdProvinces($province_id){
       $communes = DB::table('communes')
            ->join('regions', function($join) use ($province_id){
                    $join->on('communes.region_id', '=', 'regions.id')
                        ->where('regions.province_id', $province_id);
            })->get();

       return $communes;
    }

    public function getProvinceWithIdCommunes($commune_id){
        $province=  DB::table('provinces')
            ->join('regions', function($join) use ($commune_id){
                $join->on('provinces.id','=','regions.province_id');
            })->join('communes', function($query) use ($commune_id){
                $query->on('regions.id','=','communes.region_id')
                    ->where('communes.id', $commune_id);
            })->get();

        return $province->first();
    }

    /**
     * @param $region_id
     * @return \Illuminate\Support\Collection
     */
    public function getProvinceWithIdRegion($region_id){
        $province = DB::table('provinces')
            ->join('regions', function ($join) use ($region_id) {
                $join->on('provinces.id','=', 'regions.province_id')
                    ->where('regions.id',$region_id);
            })->get();
        return $province;
    }

    public function getRegionWithIdCommunes($commune_id){
        return DB::table('regions')
            ->join('communes', function($join) use ($commune_id){
                    $join->on('regions.id','=','communes.region_id')
                        ->where('communes.d', $commune_id);
        })->get();
    }

}
