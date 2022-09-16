<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index (){
        $a=DB::table('category_product')->get();
       
            return view('admin/category/index',['data1'=>$a]);
    }
    public function delete ($id){
        $a=DB::table('category_product')->where('parent_category',$id)->exists();
        if($a){
            $errors="Can not delete the category";
            return redirect()->route('admin.category.index')->with('Errors',$errors);
        }
        
        DB::table('category_product')->where('id_category',$id)->delete();
        $success="Succes delete";
        return redirect()->route('admin.category.index')->with('Success',$success);
        
    }
    public function create (){
       $a= DB::table('category_product')->get();
       //data1 dùng để làm dữ liệu hiện đệ quy 
        return view('admin/category/create',['data1'=>$a]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name_category' => 'unique:category_product,name_category',	
            
           ],  [
            'name_category.unique' => 'Name Category already exists', //chỗ này ghi tên id phần tử sai dùm
            
        ]); 
    
       $a = $request->except('_token');
     
       DB::table('category_product')->insert($a);
       $success="Succes create";
        return redirect()->route('admin.category.create')->with('Success',$success);
    }
    public function edit ($id){
    if(!DB::table('category_product')->where('id_category',$id)->exists()){
            abort(404);
        }
        $a=DB::table('category_product')->where('id_category',$id)->first();
        $b=DB::table('category_product')->get();
        //data1 tượng trung cho cái cần edit còn category để thể hiện ra
        return view('admin/category/edit',['data1'=>$a],['data2'=>$b]);
    }



    public function update(Request $request,$id){
        // sửa lỗi logic khi đặt tên primary key khác id
      
            $validated = $request->validate([
                'name_category' => 'unique:category_product,name_category,'.$id.',id_category'	
                
               ],  [
                'name_category.unique' => 'already exists', //chỗ này ghi tên id phần tử sai dùm
                
            ]); 
        
       
            $a= $request->except('_token');
            DB::table("category_product")->where('id_category',$id)->update($a);
            $success="Succes editing";
       return redirect()->route('admin.category.index')->with('Success',$success);

    }
}











 