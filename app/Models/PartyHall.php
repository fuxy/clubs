<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PartyHall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'body',
        'city_id',
        'region_id',
        'user_id',
        'capacity_children',
        'capacity_adults',
        'area',
        'age_from',
        'age_to',
        'worktime',
        'catering',
        'images',
        'address',
        'coordinates',
    ];

    protected $casts = [
        'images' => 'array'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
