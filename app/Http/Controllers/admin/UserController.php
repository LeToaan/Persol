<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class UserController extends Controller
{
    public function index()
    {
        $a = DB::table('account')->get();

        return view('admin/user/index', ['data1' => $a]);
    }
    public function delete($id)
    {

        $a = DB::table('account')->where('id', $id)->first();
        if (($id == 1) || (Auth::user()->id != 1 && $a->rank_account <= Auth::user()->rank_account)) {
            $errors = "you don't enough rank ";
            return redirect()->route('admin.user.index')->with('Errors', $errors);
        }
        // cái này để làm mẫu thôi
        // // if (file_exists(public_path('admin/user/' . $a->image_account))) {
        // //     unlink(public_path('admin/user/' . $a->image_account));
        // // }
        $a=DB::table('account')->where('id', $id)->first();
        $b=array();
        foreach($a as $key=>$value) {
            $b[$key]=$value;
        }
        $b['delete_at']=Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        DB::table('account_garbage')->insert($b);
        DB::table('rating_product')->where('account_id',$id)->delete();
        DB::table('account')->where('id', $id)->delete();
        $success = "Succes delete";
        
        return redirect()->route('admin.user.index')->with('Success', $success);
    }
    public function create()
    {
        return view('admin/user/create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username_account' => 'required|unique:account,username_account',
            'email_account' => 'required|unique:account,email_account',
        ],  [
            'username_account.unique' => 'Username already exists', //chỗ này ghi tên id phần tử sai dùm
            'email_account.unique' => 'Email already exists',
        ]);

        $a = $request->except('_token');
        $a['pass_account'] = Bcrypt($request->pass_account);
        if (!empty($a['image_account'])) {
            $image = $request->file('image_account');
            $imageName = time() . '.' . $image->extension();


            $img = Image::make($image->getRealPath());

            $img->resize(400, 400)->save(public_path('admin/user/' . $imageName));
            $a['image_account'] = $imageName;
        }
        $a['created_at']= date('Y-m-d H:i:s');
        DB::table('account')->insert($a);
        $success = "Succes create";
        return redirect()->route('admin.user.create')->with('Success', $success);
    }
    public function edit($id)
    {
        if(!DB::table('account')->where('id', $id)->exists()){
            abort(404);
        }

        $a = DB::table('account')->where('id', $id)->first();
        $edit_myself = null;
        if (Auth::user()->id !== $id) {
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }
        if (Auth::user()->id != 1 && ($id == 1 || ($a->rank_account <= Auth::user()->rank_account && $edit_myself == false))) {
            $errors = "you don't enough rank ";
            return redirect()->route('admin.user.index')->with('Errors', $errors);
        }

        return view('admin/user/edit', ['data1' => $a]);
    }



    public function update(Request $request, $id)
    {
        // sửa lỗi logic khi đặt tên primary key khác id

        $validated = $request->validate([
            'username_account' => 'unique:account,username_account,' . $id . ',id',
            'email_account' => 'unique:account,email_account,' . $id . ',id',
        ],  [
            'username_account.unique' => 'Username already exists', //chỗ này ghi tên id phần tử sai dùm
            'email_account.unique' => 'Email already exists',
        ]);



        $a = $request->except('_token', 'oldimage');
        if (!empty($request->pass_account)) {
            $a['pass_account'] = Bcrypt($request->pass_account);
        } else {
            $a = $request->except('_token', 'oldimage', 'pass_account');
        }


        //lấy oldimage ra là vì nó là tên file cũ
        $b = DB::table('account')->where('id', $id)->first();

        if (!empty($a['image_account'])) {
            if(!empty($request->oldimage)) {
                if (file_exists(public_path('admin/user/' . $request->oldimage))) {
                    unlink(public_path('admin/user/' . $request->oldimage));
                }
            }
            $image = $request->file('image_account');
            $imageName = time() . '.' . $image->extension();


            $img = Image::make($image->getRealPath());

            $img->resize(400, 400)->save(public_path('admin/user/' . $imageName));
            $a['image_account'] = $imageName;
        }

        $a['updated_at']= date('Y-m-d H:i:s');
        DB::table('account')->where('id', $id)->update($a);
        $success = "Succes editing";
        return redirect()->route('admin.user.index')->with('Success', $success);
    }
}
