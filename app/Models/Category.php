<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_expenditure',
        'family_id'
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function defaultBudgets()
    {
        return $this->hasMany(DefaultBudget::class);
    }

    public function monthlyBudgets()
    {
        return $this->hasMany(MonthlyBudget::class);
    }

    public function fixedCosts()
    {
        return $this->hasMany(FixedCost::class);
    }
}
