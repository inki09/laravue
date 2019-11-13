<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierInfo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'corporate_name'=> $this->corporate_name,
            'default_payement'=> $this->default_payement,
            'adress'=> $this->adress,
            'default_currency'=> $this->default_currency,
            'numero_siret'=> $this->numero_siret,
            'tva_intracom'=> $this->tva_intracom,
            'contacts'=> $this->contacts,
        ];
    }
}
