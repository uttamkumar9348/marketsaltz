<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Form;
use Artisan;
use Cache;
use CoreComponentRepository;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_dashboard(Request $request)
    {   
        CoreComponentRepository::initializeCache();
        $root_categories = Category::where('level', 0)->get();

        $cached_graph_data = Cache::remember('cached_graph_data', 86400, function() use ($root_categories){
            $num_of_sale_data = null;
            $qty_data = null;
            foreach ($root_categories as $key => $category){
                $category_ids = \App\Utility\CategoryUtility::children_ids($category->id);
                $category_ids[] = $category->id;

                $products = Product::with('stocks')->whereIn('category_id', $category_ids)->get();
                $qty = 0;
                $sale = 0;
                foreach ($products as $key => $product) {
                    $sale += $product->num_of_sale;
                    foreach ($product->stocks as $key => $stock) {
                        $qty += $stock->qty;
                    }
                }
                $qty_data .= $qty.',';
                $num_of_sale_data .= $sale.',';
            }
            $item['num_of_sale_data'] = $num_of_sale_data;
            $item['qty_data'] = $qty_data;

            return $item;
        });

        return view('backend.dashboard', compact('root_categories', 'cached_graph_data'));
    }

    function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        flash(translate('Cache cleared successfully'))->success();
        return back();
    }
    
    public function registration_form(){
        $registration_form = Form::all();    
        // dd($form);
        return view('backend.form.registration_form', compact('registration_form'));
    }
    public function add_registration_option(Request $request){
        // dd($request->all());
        
        $insert = new Form;
        $insert->option = $request->option; 
        $insert->save(); 
        return redirect()->back();
    }
    public function edit_registration_option(Request $request){
        // dd($request->all());
        
        $update = Form::where('id',$request->id)->first();
        $update->option = $request->option; 
        $update->update(); 
        return redirect()->back();
    }
    public function delete_registration_option($id){
        // dd($id);
        
        $remove = Form::where('id',$id)->delete();
        return redirect()->back();
    }
}
