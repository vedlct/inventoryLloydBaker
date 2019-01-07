<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table='productcategory';
    protected $primaryKey='productcategoryId';
    public $timestamps=false;
}
