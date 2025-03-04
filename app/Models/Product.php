<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Product extends Model
{

    protected $fillable = [
        'name', 'added_by', 'user_id','unique_id','brand_name','model_no','hsn_hscode','tech_parameters','cas_no','purity','volume_weight','country_of_origin','city_of_origin','product_certification','category_id', 'brand_id', 'photos', 'thumbnail_img', 'video_provider', 'video_link', 
        'tags', 'description', 'unit_price', 'purchase_price', 'variant_product', 'attributes', 'choice_options', 'unit', 'slug', 
        'approved', 'choice_options', 'colors', 'variations', 'todays_deal', 'published', 'approved', 'stock_visibility_state', 
        'cash_on_delivery', 'featured', 'seller_featured', 'current_stock', 'unit', 'min_qty', 'low_stock_quantity', 
        'discount', 'discount_type', 'discount_start_date', 'discount_end_date', 'shipping_type', 'shipping_cost', 'is_quantity_multiplied',
        'est_shipping_days', 'meta_title', 'meta_description', 'meta_img', 'pdf', 'slug', 'rating', 'barcode', 'digital', 'external_link', 
        'external_link_btn','refundable','earn_point'
    ];

    protected $with = ['product_translations', 'taxes'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? App::getLocale() : $lang;
        $product_translations = $this->product_translations->where('lang', $lang)->first();
        return $product_translations != null ? $product_translations->$field : $this->$field;
    }

    public function product_translations()
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->where('status', 1);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }

    public function taxes()
    {
        return $this->hasMany(ProductTax::class);
    }

    public function flash_deal_product()
    {
        return $this->hasOne(FlashDealProduct::class);
    }

    public function bids()
    {
        return $this->hasMany(AuctionProductBid::class);
    }

    public function scopePhysical($query)
    {
        return $query->where('digital', 0);
    }
}
