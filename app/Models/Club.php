<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'body',
        'city_id',
        'user_id',
        'capacity_children',
        'capacity_adults',
        'area',
        'age_from',
        'age_to',
        'worktime',
        'catering',
        'garden',
        'site',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->morphToMany(Location::class, 'locationable');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'city_id');
    }
}
