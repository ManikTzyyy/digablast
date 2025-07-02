<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Import HasMany

class Package extends Model
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'benefits',
        'features',
        'price',
        'is_active',
        'duration_days',
        'user_acquisition_limit',
        'is_best_offer'
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'benefits' => 'array',
            'features' => 'array',
            'price' => 'integer',
            'is_active' => 'boolean',
            'duration_days' => 'integer',
            'user_acquisition_limit' => 'integer',
            'is_best_offer' => 'boolean',
        ];
    }
}
