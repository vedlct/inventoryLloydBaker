<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brand';
    protected $primaryKey='brandId';
    public $timestamps=false;
}
