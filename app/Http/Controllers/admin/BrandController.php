<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {
       
        $a=DB::table('brand')->get();

        return view('admin/brand/index', ['data1' => $a]);
    }
    public function delete($id)
    {
        DB::table('brand')->where('id_brand',$id)->delete();
        $success="Succes delete";
        return redirect()->route('admin.brand.index')->with('Success',$success);
    }
    public function create()
    {
     
        return view('admin/brand/create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_brand' => 'unique:brand,name_brand',	
            
           ],  [
            'name_brand.unique' => 'Name already exists', //chỗ này ghi tên id phần tử sai dùm
            
        ]); 
        $a=$request->except('_token');
    
        DB::table('brand')->insert($a);
        $success="Succes create";
        return redirect()->route('admin.brand.create')->with('Success',$success);
    }
    public function edit($id)
    {    
        if(!DB::table('brand')->where('id_brand',$id)->exists()){
            abort(404);
        }
        $a=DB::table('brand')->where('id_brand',$id)->first();
        return view('admin/brand/edit',['data1'=>$a]);

    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_brand' => 'unique:brand,name_brand,'.$id.',id_brand',	
            
           ],  [
            'name_brand.unique' => 'Name already exists', //chỗ này ghi tên id phần tử sai dùm
            
        ]); 
        $a=$request->except('_token');
    
        DB::table('brand')->where('id_brand',$id)->update($a);
        $success="Succes editing";
        return redirect()->route('admin.brand.index')->with('Success',$success);
    }
}
