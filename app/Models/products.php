<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class products extends Model
{
    protected $fillable = ['price', 'name', 'sale', 'soluong', 'category_id', 'description', 'img','id'];
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function scopeProducts($query)
    {
        if ($txtKeyword = request()->txtKeyword) {
            return $query->orderBy('id','desc')->where('name','like',"%$txtKeyword%")->with('categories');
        } else {
            return $query->orderBy('id','desc')->with('categories')->join('categories', 'products.category_id', '=', 'categories.id')->select('products.*', 'categories.name as category_name');
        }
    }


    public function scopeGetProductsHome($query)
    {
        return $query->orderBy('view', 'desc')->limit(4)->get();
    }

    public function scopeGetProductsByCategory($query,$category_id)
    {
        return $query->where('category_id', $category_id);
    }
    public function scopeGetProductsDetail($query,$product_id)
    {
        return $query->where('id', $product_id);
    }
 
}
