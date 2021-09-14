<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
