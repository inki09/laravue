<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierInfo extends Model
{
    protected $fillable = ['corporate_name', 'adress', 'default_payement',
                            'numero_siret', 'tva_intracom', 'contacts'];
}
