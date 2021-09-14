<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'price',
        'number_of_date'
    ];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }
}
