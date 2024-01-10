<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory_transactions';

    protected $fillable = ['selected_unit','product_id', 'location_id','warehouse_id', 'increase_inventory', 'decrease_inventory', 'created_at','updated_at'];

    protected $primaryKey = 'transaction_id ';

}
