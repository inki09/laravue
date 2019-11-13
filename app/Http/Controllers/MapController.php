<?php

namespace App\Http\Controllers;

use App\Manager\MapManager\MapManager;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    /**
     * @var MapManager
     */
    protected $mapManager;

    public function __construct(MapManager $mapManager)
    {
        $this->mapManager = $mapManager;
    }

    public function test()
    {
        $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
            return strtoupper($name);
        })
            ->reject(function ($name) {
                return empty($name);
            });
        $regions = $this->mapManager->getRegionsWithIdProvinces(1);
        $communesByProvince = $this->mapManager->getCommunesWithIdProvinces(1);
        $province = $this->mapManager->getProvinceWithIdCommunes(2);
        dd($province);
     }

}
