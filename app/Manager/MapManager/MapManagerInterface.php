<?php
/**
 * Created by PhpStorm.
 * User: Allur-11
 * Date: 06/11/2019
 * Time: 15:51
 */

namespace App\Manager\MapManager;


interface MapManagerInterface
{
    public function getAllProvinces();

    public function getAllRegions();

    public function getAllCommunes();

    public function getRegionsWithIdProvinces($province_id);

    public function getCommunesWithIdRegions($regions_id);

    public function getCommunesWithIdProvinces($province_id);

    public function getProvinceWithIdCommunes($commune_id);
    public function getProvinceWithIdRegion($region_id);

    public function getRegionWithIdCommunes($commune_id);

}
