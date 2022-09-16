<?php
namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Account;
use App\Models\User;
use Carbon\Carbon as CarbonCarbon;
use DateTime;
use GrahamCampbell\ResultType\Success;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Str;
use Carbon\Carbon;
use Laravel\Ui\Presets\React;
use DB;
class LoginController extends Controller
{
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('admin.home');
        }
      
        return view('account/login');
    }
    public function postLogin(Request $request){
        $credentials = $request->validate([
            'username_account' => ['required'],
            'password' => ['required'],
        ]);

      
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('admin.home');
        }
        
      
        $a=true;
        return back()->with('Error',$a);
            
        
    }
    public function logout(Request $request){
       Auth::logout();
       return redirect()->route('login');
            
        
    }
    public function register(Request $request){
        return view('account/register');
    }
    public function registerStore(Request $request){
        $validated = $request->validate([
            'username_account' => 'required|unique:account,username_account',
            'email_account' => 'required|unique:account,email_account',

        ],  [
            'username_account.unique' => 'Username already exists!', 
            'email_account.unique' => 'Email already exists!',
        ]);
        
        $a = $request->except('_token','terms');
        $a['pass_account'] = Bcrypt($request->pass_account);
        $a['created_at']= date('Y-m-d H:i:s');
        DB::table('account')->insert($a);
        return redirect()->route('login');
    }

    public function forgetPass(){
        return View('account.forgetPass');
    }
    public function postForgetPass(Request $request){
        $request->validate([
            'email_account' =>'required|email|exists:account,email_account'
        ],[
            'email_account.required' =>'Email validate!',
            'email_account.exists' =>'Email does not exits!',
        ]); 
        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email_account'=>$request->email_account,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);

        $action_link = route('showResetForm',['token' => $token,'email_account' => $request->email_account]);
        $body = 'We are received a request to reset your password '.$request->email_account.' you can reset your password';
        \Mail::send('email.check_forgetPass',['action_link' => $action_link, 'body' => $body],function($message) use ($request){
            $message->from('thaitoan553@gmail.com','Your app name');
            $message->to($request->email_account,'your name')
            ->subject('Reset Password');
        });
        return back()->with('success', 'We have mail your password reset link');
    }

    public function showResetForm(Request $request, $token = null){
        return view('account.reset')->with(['token' => $token,'email_account' => $request->email_account]);
    }
    public function resetPassword(Request $request){
        $request->validate([
            'email_account' => 'required|email|exists:account,email_account',
            'pass_account' => 'required|min:6',
            'confirmpass_account'=> 'required|same:pass_account',
        ]);
        $check_token = \DB::table('password_resets')->where([
            'email_account' => $request->email_account,
            'token' => $request->token,
        ])->first();

        if(!$check_token){
            return back()->with('fail','Invalid token');
        }else{
            Account::where('email_account', $request->email_account)->update([
                'pass_account'=>Hash::make($request->pass_account)
            ]);
            \DB::table('password_resets')->where([
                'email_account' => $request->email_account,
            ])->delete();
            return redirect()->route('login')->with('info', 'Your password has been changed! You can login now.')->with('verifiedEmail', $request->email_account);
        }
    }
    
}
