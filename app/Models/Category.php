<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['category_id','category_name','created_at','updated_at'];

    protected $primaryKey = 'category_id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
