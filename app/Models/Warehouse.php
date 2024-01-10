<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouse';

    protected $fillable = ['warehouse_name','location_id','created_at','updated_at'];

    protected $primaryKey = 'warehouse_id';
}
