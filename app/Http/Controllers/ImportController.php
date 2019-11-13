<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function test(){
        $retour = include(resource_path().'\import\import.php');
        dd($retour['mettalica']);
    }
}
