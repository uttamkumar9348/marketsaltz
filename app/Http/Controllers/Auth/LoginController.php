<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Models\User;
use App\Models\Customer;
use App\Models\Cart;
use Session;
use Illuminate\Http\Request;
use CoreComponentRepository;
use Illuminate\Support\Str;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /*protected $redirectTo = '/';*/


    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        if(request()->get('query') == 'mobile_app'){
            request()->session()->put('login_from', 'mobile_app');
        }
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request, $provider)
    {
        if (session('login_from') == 'mobile_app') {
            return $this->mobileHandleProviderCallback($request, $provider);
        }
        try {
            if ($provider == 'twitter') {
                $user = Socialite::driver('twitter')->user();
            } else {
                $user = Socialite::driver($provider)->stateless()->user();
            }
        } catch (\Exception $e) {
            flash("Something Went wrong. Please try again.")->error();
            return redirect()->route('user.login');
        }

        //check if provider_id exist
        $existingUserByProviderId = User::where('provider_id', $user->id)->first();

        if ($existingUserByProviderId) {
            //proceed to login
            auth()->login($existingUserByProviderId, true);
        }
        else {
            //check if email exist
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                //update provider_id
                $existing_User = $existingUser;
                $existing_User->u_id = strtoupper(bin2hex(random_bytes(10)));
                $existing_User->provider_id = $user->id;
                $existing_User->save();

                //proceed to login
                auth()->login($existing_User, true);
            } else {
                //create a new user
                $newUser = new User;
                $newUser->name = $user->name;
                $newUser->u_id = strtoupper(bin2hex(random_bytes(10)));
                $newUser->email = $user->email;
                $newUser->email_verified_at = date('Y-m-d Hms');
                $newUser->provider_id = $user->id;
                $newUser->save();

                //make user a customer
                // $customer = new Customer;
                // $customer->user_id = $newUser->id;
                // $customer->save();

                //proceed to login
                auth()->login($newUser, true);
            }
        }

        if (session('temp_user_id') != null) {
            Cart::where('temp_user_id', session('temp_user_id'))
                ->update([
                    'user_id' => auth()->user()->id,
                    'temp_user_id' => null
                ]);

            Session::forget('temp_user_id');
        }

        if (session('link') != null) {
            return redirect(session('link'));
        } else {
            if(auth()->user()->user_type == 'seller') {
                return redirect()->route('seller.dashboard');
            }
            return redirect()->route('dashboard');
        }
    }

    public function mobileHandleProviderCallback($request, $provider)
    {
        $return_provider = '';
        $result = false;
        if($provider) {
            $return_provider = $provider;
            $result = true;
        }
        return response()->json([
            'result' => $result,
            'provider' => $return_provider
        ]);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required_without:phone',
            'phone'    => 'required_without:email',
            'password' => 'required|string',
        ]);
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        if ($request->get('phone') != null) {
            return ['phone' => "+{$request['country_code']}{$request['phone']}", 'password' => $request->get('password')];
        } elseif ($request->get('email') != null) {
            return $request->only($this->username(), 'password');
        }
    }

    /**
     * Check user's role and redirect user based on their role
     * @return
     */
    public function authenticated()
    {
        
        if (session('temp_user_id') != null) {
            Cart::where('temp_user_id', session('temp_user_id'))
                ->update(
                    [
                        'user_id' => auth()->user()->id,
                        'temp_user_id' => null
                    ]
                );

            Session::forget('temp_user_id');
        }
        
        
        if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'staff') {
            
            CoreComponentRepository::instantiateShopRepository();
            
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->user_type == 'seller') {
            return redirect()->route('seller.dashboard');
        } else {

            if (session('link') != null) {
                return redirect(session('link'));
            } else {
                return redirect()->route('dashboard');
            }
        }
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        flash(translate('Invalid login credentials'))->error();
        return back();
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        if (auth()->user() != null && (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'staff')) {
            $redirect_route = 'login';
        } else {
            $redirect_route = 'home';
        }

        //User's Cart Delete
        if (auth()->user()) {
            Cart::where('user_id', auth()->user()->id)->delete();
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route($redirect_route);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function _registerOrLoginUser($data){
        $user = User::where('email',$data->email)->first();
          if(!$user){
             $user = new User();
             $user->name = $data->name;
             $user->u_id = strtoupper(bin2hex(random_bytes(10)));
             $user->email = $data->email;
             $user->provider_id = $data->id;
             $user->avatar = $data->avatar;
             $user->save();
          }
        Auth::login($user);
        }
//Google Login
public function redirectToGoogle(){
return Socialite::driver('google')->stateless()->redirect();
}

//Google callback  
public function handleGoogleCallback(){

$user = Socialite::driver('google')->stateless()->user();

  $this->_registerorLoginUser($user);
  return redirect()->route('home');
}
//LinkedIn Login
public function redirectToLinkedIn(){
return Socialite::driver('linkedin')->stateless()->redirect();
}

//LinkedIn callback  
public function handleLinkedInCallback(){

$user = Socialite::driver('linkedin')->stateless()->user();

  $this->_registerorLoginUser($user);
  return redirect()->route('home');
}


   public function linkedinRedirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }
       
    public function linkedinCallback()
    {
        try {
     
            $user = Socialite::driver('linkedin')->user();
      
            $linkedinUser = User::where('oauth_id', $user->id)->first();
      
            if($linkedinUser){
      
                Auth::login($linkedinUser);
     
                return redirect('/dashboard');
      
            }else{
                $user = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => 'linkedin',
                    'password' => encrypt('admin12345')
                ]);
     
                Auth::login($user);
      
                return redirect('/dashboard');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function ip(Request $request){
        dd($request->ip());
    }
    public function mailtest(){
        dd('hi');
        $data = array('name'=>"Abinash Bhatta",'company_name'=>"EDevlop Services Pvt. Ltd");
      Mail::send('emails.welcom_mail', $data, function($message) {
         $message->to('abinash889@gmail.com', 'Market Saltz')->subject
            ('Welcome Mail');
         $message->from('support@marketsaltz.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
        
    
    }

}
