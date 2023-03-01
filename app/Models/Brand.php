<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected  $primarykey = 'id';
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
        // quan hệ 1-n thì dùng hasMany , n-1 hoặc 1-1 thì dùng belongsTo
    }
}
