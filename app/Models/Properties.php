<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = ['name','phone', 'slug', 'excerpt', 'link', 'image', 'address', 'status', 'payment_status', 'is_featured', 'attribute_classes', 'listed_date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attributes()
    {
        return $this->hasMany(PropertyAttribute::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function offerTypes()
    {
        return $this->hasMany(OfferType::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function prices() {
        return $this->hasMany(Price::class);
    }

    public function listingReply() {
        return $this->hasMany(ListingReply::class);
    }
}
