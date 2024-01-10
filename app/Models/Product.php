<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['product_name','category_id','price','location_id','unit','warehouse_id','multipler','stock_unit','created_at','updated_at'];

    protected $primaryKey = 'product_id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

}   
