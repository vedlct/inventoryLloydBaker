<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockTransfer extends Model
{
    protected $table='stocktransfer';
    protected $primaryKey='stockTransferId';
    public $timestamps=false;
}
