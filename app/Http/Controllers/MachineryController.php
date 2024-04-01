<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\machinery;
use App\Models\ProductTranslation;
use App\Models\ProductTax;
use CoreComponentRepository;
use Artisan;
use Cache;
use Str;
use App\Services\ProductService;
use App\Services\ProductTaxService;
use App\Services\ProductFlashDealService;
use App\Services\ProductStockService;

class MachineryController extends Controller
{
    protected $productService;
    protected $productTaxService;
    protected $productFlashDealService;
    protected $productStockService;

    public function __construct(
        ProductService $productService,
        ProductTaxService $productTaxService,
        ProductFlashDealService $productFlashDealService,
        ProductStockService $productStockService
    ) {
        $this->productService = $productService;
        $this->productTaxService = $productTaxService;
        $this->productFlashDealService = $productFlashDealService;
        $this->productStockService = $productStockService;
    }
   
    public function machinery(){
         CoreComponentRepository::initializeCache();

        $categories = Category::where('parent_id', 22)
            ->where('digital', 0)
            ->with('childrenCategories')
            ->get();
            
            
        return view ('backend.product.products.machinery',compact('categories'));
        
    }
     public function insert(Request $request){
        //   dd($request->all());
          
            // $insert= new machinery;
            
            
            
            // $insert->name = $request->name;
            // $insert->added_by = $request->added_by;
            // $insert->user_id = $request->user_id;
            // $insert->unique_id = $request->unique_id;
            // $insert->brand_name = $request->brand_name;
            // $insert->model_no = $request->model_no;
            // $insert->subcategory = $request->subcategory;
            // $insert->hsn_hscode = $request->hsn_hscode;
            // $insert->country_of_origin = $request->country_of_origin;
            // $insert->product_certification = $request->product_certification;
            // $insert->tech_parameters = $request->tech_parameters;
            // $insert->category_id = $request->category_id;
            // $insert->brand_id = $request->brand_id;
            
            
       
  
            // // $insert = $request->all();
  
            // // if ($insert = $request->file('photos')) {
            // //     $destinationPath = 'image/';
            // //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // //     $image->move($destinationPath, $profileImage);
            // //     $insert['photos'] = "$profileImage";
            // // }
        
            // // Product::insert($insert);
        
        
            // // // $insert->photos = $request->photos;
            // // $insert->thumbnail_img = $request->thumbnail_img;
            // $insert->video_provider = $request->video_provider;
            // $insert->video_link = $request->video_link;
            // $insert->tags = $request->tags[0];
            // $insert->description = $request->description;
            // $insert->unit_price = $request->unit_price;
            // $insert->purchase_price = $request->purchase_price;
            // $insert->variant_product = $request->variant_product;
            // $insert->attributes = $request->attributes;
            // $insert->choice_options = 1;
            // $insert->colors = $request->colors;
            // $insert->variations = $request->variations;
            // $insert->todays_deal = $request->todays_deal;
            // $insert->published = $request->published;
            // $insert->approved = $request->approved;
            // $insert->stock_visibility_state = $request->stock_visibility_state;
            // $insert->cash_on_delivery = $request->cash_on_delivery;
            // $insert->featured = $request->featured;
            // $insert->seller_featured = $request->seller_featured;
            // $insert->current_stock = $request->current_stock;
            // $insert->unit = $request->unit;
            // $insert->min_qty = $request->min_qty;
            // $insert->low_stock_quantity = $request->low_stock_quantity;
            // $insert->discount = $request->discount;
            // $insert->discount_type = $request->discount_type;
            // $insert->discount_start_date = $request->discount_start_date;
            // $insert->discount_end_date = $request->discount_end_date;
            // $insert->tax = $request->tax;
            // $insert->tax_type = $request->tax_type;
            // $insert->shipping_type = $request->shipping_type;
            // $insert->shipping_cost = $request->shipping_cost;
            // $insert->is_quantity_multiplied = $request->is_quantity_multiplied;
            // $insert->est_shipping_days = $request->est_shipping_days;
            // $insert->num_of_sale = $request->num_of_sale;
            // $insert->meta_title = $request->meta_title;
            // $insert->meta_description = $request->meta_description;
            // $insert->meta_img = $request->meta_img;
            // $insert->pdf = $request->pdf;
            // $insert->slug = $request->slug;
            // $insert->rating = $request->rating;
            // $insert->barcode = $request->barcode;
            // $insert->digital = $request->digital;
            // $insert->auction_product = $request->auction_product;
            // $insert->file_name = $request->file_name;
            // $insert->file_path = $request->file_path;
            // $insert->external_link = $request->external_link;
            // $insert->external_link_btn = $request->external_link_btn;
            // $insert->wholesale_product = $request->wholesale_product;
            
            // // $insert_json=json_encode($request->all());
            // $insert->save();
          
          
         $product = $this->productService->store($request->except([
            '_token', 'sku', 'choice', 'tax_id', 'tax', 'tax_type', 'flash_deal_id', 'flash_discount', 'flash_discount_type'
        ]));
        $request->merge(['product_id' => $product->id]);

        //VAT & Tax
        if($request->tax_id) {
            $this->productTaxService->store($request->only([
                'tax_id', 'tax', 'tax_type', 'product_id'
            ]));
        }

        //Flash Deal
        $this->productFlashDealService->store($request->only([
            'flash_deal_id', 'flash_discount', 'flash_discount_type'
        ]), $product);

        //Product Stock
        $this->productStockService->store($request->only([
            'colors_active', 'colors', 'choice_no', 'unit_price', 'sku', 'current_stock', 'product_id'
        ]), $product);

        // Product Translations
        $request->merge(['lang' => env('DEFAULT_LANGUAGE')]);
        ProductTranslation::create($request->only([
            'lang', 'name', 'unit', 'description', 'product_id'
        ]));

        flash(translate('Product has been inserted successfully'))->success();

        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        
        return view ('backend.product.products.machinery');
        
    }

}
