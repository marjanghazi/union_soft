<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'price',
        'sale_price',
        'category',
        'technology',
        'license',
        'image',
        'screenshots',
        'features',
        'requirements',
        'demo_url',
        'documentation_url',
        'version',
        'download_count',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'screenshots' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
    ];

    /**
     * Get the discount percentage
     */
    public function getDiscountPercentageAttribute()
    {
        if ($this->sale_price && $this->price > 0) {
            return round((($this->price - $this->sale_price) / $this->price) * 100);
        }
        return 0;
    }

    /**
     * Get the effective price (sale price if exists, otherwise regular price)
     */
    public function getEffectivePriceAttribute()
    {
        return $this->sale_price ?? $this->price;
    }

    /**
     * Scope to get active products
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to get featured products
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
