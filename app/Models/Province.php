<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
  //  use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable= ['province_name'];
    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions(){
        return $this->hasMany(Region::class, 'province_id', 'id');
    }
}
