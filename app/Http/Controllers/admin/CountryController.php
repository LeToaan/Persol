<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CountryController extends Controller
{
    public function index()
    {
       
        $a=DB::table('country')->get();

        return view('admin/country/index', ['data1' => $a]);
    }
    public function delete($id)
    {
        DB::table('country')->where('id_country',$id)->delete();
        $success="Succes delete";
        return redirect()->route('admin.country.index')->with('Success',$success);
    }
    public function create()
    {
      
        return view('admin/country/create');
    }
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name_country' => 'unique:country,name_country'	
            
           ],  [
            'name_country.unique' => 'Country already exists', //chỗ này ghi tên id phần tử sai dùm
            
        ]); 
        $a=$request->except('_token');
        DB::table('country')->insert($a);
        $success="Succes create";
        return redirect()->route('admin.country.create')->with('Success',$success);
      
    }
    public function edit($id)
    {       
        if(!DB::table('country')->where('id_country',$id)->exists()){
            abort(404);
        }
      
        $a=DB::table('country')->where('id_country',$id)->first();
        return view('admin/country/edit',['data1'=>$a]);

    }
    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_country' => 'unique:country,name_country,'.$id.',id_country',	
            
           ],  [
            'name_country.unique' => 'Nhãn hiệu này có rồi', //chỗ này ghi tên id phần tử sai dùm
            
        ]); 
        $a=$request->except('_token');
      
    
        DB::table('country')->where('id_country',$id)->update($a);
        $success="Succes editing";
        return redirect()->route('admin.country.index')->with('Success',$success);
    }
}
