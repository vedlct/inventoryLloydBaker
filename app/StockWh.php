<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockWh extends Model
{
    protected $table='stockwh';
    protected $primaryKey='stockinwareId';
    public $timestamps=false;
}
