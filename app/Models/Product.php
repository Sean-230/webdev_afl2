<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category',
        'price',
        'old_price',
        'image',
        'flavors',
        'size',
        'is_featured',
        'is_available',
        'stock',
        'badge',
    ];

    protected $casts = [
        'flavors' => 'array',
        'is_featured' => 'boolean',
        'is_available' => 'boolean',
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
    ];

    /**
     * Get formatted price
     */
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    /**
     * Get formatted old price
     */
    public function getFormattedOldPriceAttribute()
    {
        return $this->old_price ? 'Rp ' . number_format($this->old_price, 0, ',', '.') : null;
    }

    /**
     * Check if product has discount
     */
    public function getHasDiscountAttribute()
    {
        return $this->old_price && $this->old_price > $this->price;
    }

    /**
     * Get discount percentage
     */
    public function getDiscountPercentageAttribute()
    {
        if (!$this->has_discount) {
            return 0;
        }
        return round((($this->old_price - $this->price) / $this->old_price) * 100);
    }

    /**
     * Scope for featured products
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope for available products
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    /**
     * Scope for specific category
     */
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
