<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function home(Request $request){
      
       $ip=$request->ip();
       $timestart=Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
       $data['name_ip']=$ip;
       $data['create_ip']=$timestart;
        $a=DB::table('ip')->where('name_ip',$ip)->exists();
        if(!$a){
            DB::table('ip')->insert($data);
        }else {
       DB::table('ip')->where('create_ip',$ip)->update($data);
    }
         $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $c=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
    
    $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
    $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
$MonthUser=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();

      
        $product = DB::table('product')->where('delete_featured','0')->get()->count();
        
        $admin= DB::table('account')->where('rank_account','<=',2)->get()->count();
        $user = DB::table('account')->get()->count();
        
       return view('admin/home',compact('product','user','admin','MonthUser'));
        

        
    
    }
}
