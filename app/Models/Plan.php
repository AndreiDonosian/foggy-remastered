<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Plan extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'description',
        'features',
        'price',
        'mb_limit',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'float',
            'mb_limit' => 'integer',
            'status' => 'boolean',
        ];
    }

    /**
     * Alias so `$plan->name` resolves to the `title` column, matching the
     * fallback stdClass built in User::getPlan() and the Blade templates.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => $attributes['title'] ?? null,
        );
    }
}