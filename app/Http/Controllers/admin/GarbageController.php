<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Image;
use Carbon\Carbon;

class GarbageController extends Controller
{
    public function member()
    {
        $time = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
        //biến này dùng để xóa tài khoản đã xóa hơn 1 tháng
        $deletes = DB::table('account_garbage')->where('delete_at', '<', $time)->get();

        foreach ($deletes as $DELETE) {
            //CHỨA DỮ LIỆU ĐÃ TỒN TẠI HƠN 1 THÁNG

            if (file_exists(public_path('admin/user/' . $DELETE->image_account))) {
                // unlink(public_path('admin/user/' . $DELETE->image_account));
                DB::table('account_garbage')->where('id', $DELETE->id)->delete();
            }
        }
        // lấy dữ liệu in vào
        
        $a   = DB::table('account_garbage')->get();

        return view('admin/garbage/member', ['data1' => $a]);
    }
    // hồi phục tài khoản bên member 
    public function restore($id)
    {
        $a = DB::table('account_garbage')->where('id', $id)->first();
        foreach ($a as $key => $value) {
            if ($key != 'delete_at') {
                $b[$key] = $value;
            }
        }
        DB::table('account_garbage')->where('id', $id)->delete();
        DB::table('account')->insert($b);
        $success = "Succes restore";
        return redirect()->route('admin.garbage.member.index')->with('Success', $success);
    }
    public function product()
    {
        // xóa dữ liệu xóa hơn  1 tháng trc
        $time = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
        //biến này dùng để xóa sản phẩm đã xóa hơn 1 tháng
        $deletes = DB::table('product')->where('delete_featured', '1')->where('delete_at', '<', $time)->get();
        foreach ($deletes as $DELETE) {
            $a = DB::table('image_product')->where('product_id', $DELETE->id_product)->get();
            foreach ($a as $A) {
                if(!empty($DELETE->image_account)){
                    if (file_exists(public_path('admin/product/' . $A->name_image))) {
                        unlink(public_path('admin/product/' . $A->name_image));
                    }
                }
                
            }
            DB::table('rating_product')->where('product_id',$DELETE->id_product)->delete();
            DB::table('image_product')->where('product_id', $DELETE->id_product)->delete();
        
            DB::table('product_properties_frame')->where('product_id',  $DELETE->id_product)->delete();
            DB::table('product_properties_lenses')->where('product_id',  $DELETE->id_product)->delete();
            DB::table('product')->where('id_product',  $DELETE->id_product)->delete();
        }

        //lấy dữ liệu in vào
        $a = DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')

            ->where('product.delete_featured', '=', '1')
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country', 'image_product.name_image')
            ->get();
        return view('admin/garbage/product', ['data1' => $a]);
    }
    public function fix($id)
    {
        $b['delete_at'] = null;
        $b['delete_featured'] = '0';
        DB::table('product')->where('id_product', $id)->update($b);
        $success = "Succes restore";
        return redirect()->route('admin.garbage.product.index')->with('Success', $success);
    }
}
