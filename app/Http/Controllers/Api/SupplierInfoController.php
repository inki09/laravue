<?php

namespace App\Http\Controllers\Api;

use App\SupplierInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SupplierInfo as SupplierRessource;

class SupplierInfoController extends Controller
{

   public function getInfo()
   {

       $supplierInfo  = SupplierInfo::find(1);
       if(isset($supplierInfo)){
           return new SupplierRessource(SupplierInfo::find(1));
       }
       return \response()->json(null);
   }

   public function editInfo(Request $request, $id)
   {
   	$info = SupplierInfo::findOrFail($id);
   	$info->update($request->only([
   		'corporate_name',
   		 'adress', 
   		 'default_payement',
   		 'numero_siret', 
   		 'tva_intracom', 
   		 'contacts']));
   	return $info;	
   }

}
