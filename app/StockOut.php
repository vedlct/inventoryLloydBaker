<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockOut extends Model
{
    protected $table='stockout';
    protected $primaryKey='stockOutId';
    public $timestamps=false;
}
