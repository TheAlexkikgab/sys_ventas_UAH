<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected function status():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value== 1 ?'Active' : "Inactive",
        );
    }
}
