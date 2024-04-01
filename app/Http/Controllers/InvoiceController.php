<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Billing_address;
use App\Models\BuyerRegister;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Language;
use App\Models\Order;
use App\Models\User;
use App\Models\Shop;
use App\Models\State;
use Session;
use PDF;
use Config;
use NumberFormatter;

class InvoiceController extends Controller
{
    //download invoice
    public function invoice_download($id)
    {
        if(Session::has('currency_code')){
            $currency_code = Session::get('currency_code');
        }
        else{
            $currency_code = Currency::findOrFail(get_setting('system_default_currency'))->code;
        }
        $language_code = Session::get('locale', Config::get('app.locale'));

        if(Language::where('code', $language_code)->first()->rtl == 1){
            $direction = 'rtl';
            $text_align = 'right';
            $not_text_align = 'left';
        }else{
            $direction = 'ltr';
            $text_align = 'left';
            $not_text_align = 'right';            
        }

        if($currency_code == 'BDT' || $language_code == 'bd'){
            // bengali font
            $font_family = "'Hind Siliguri','sans-serif'";
        }elseif($currency_code == 'KHR' || $language_code == 'kh'){
            // khmer font
            $font_family = "'Hanuman','sans-serif'";
        }elseif($currency_code == 'AMD'){
            // Armenia font
            $font_family = "'arnamu','sans-serif'";

        }elseif($currency_code == 'AED' || $currency_code == 'EGP' || $language_code == 'sa' || $currency_code == 'IQD' || $language_code == 'ir' || $language_code == 'om' || $currency_code == 'ROM' || $currency_code == 'SDG' || $currency_code == 'ILS'){
            // middle east/arabic/Israeli font
            $font_family = "'Baloo Bhaijaan 2','sans-serif'";
        }elseif($currency_code == 'THB'){
            // thai font
            $font_family = "'Kanit','sans-serif'";
        }else{
            // general for all
            $font_family = "'Roboto','sans-serif'";
        }

        $config = [];
        
        $order = Order::findOrFail($id);
        $user = User::where('id',$order->user_id)->first();
        $seller = User::where('id',$order->seller_id)->first();
        // dd($bil_state);
        $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);

        $shop='';
        $customer='';
        if($user->user_type == 'customer'){
            $customer = BuyerRegister::where('email',$user->email)->first();
        }else{
            if($user->user_type == 'seller'){
            $shop = Shop::where('user_id',$order->user_id)->first();
            }
        }
        return PDF::loadView('backend.invoices.invoice',[
            'digit'=>$digit,
            'seller'=>$seller,
            'user'=>$user,
            'customer'=>$customer,
            'shop'=>$shop,
            'order' => $order,
            'font_family' => $font_family,
            'direction' => $direction,
            'text_align' => $text_align,
            'not_text_align' => $not_text_align
        ], $config)->download('order-'.$order->code.'.pdf');
    }
}
