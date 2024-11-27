<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Relación con la categoría (el producto pertenece a una categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
