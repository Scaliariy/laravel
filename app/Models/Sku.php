<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sku extends Model
{
    use SoftDeletes, Translatable;

    protected $fillable = ['product_id', 'count', 'price', 'image'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function propertyOptions()
    {
        return $this->belongsToMany(PropertyOption::class, 'sku_property_option')->withTimestamps();
    }

    public function isAvailable()
    {
        if (!is_null($this->product)){
            return !$this->product->trashed() && $this->count > 0;
        }
        return false;
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        } else {
            return $this->price;
        }
    }

    public function getPriceAttribute($value)
    {
        return round(CurrencyConversion::convert($value), 2);
    }
}
