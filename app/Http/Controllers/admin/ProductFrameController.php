<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;
class ProductFrameController extends Controller
{
    public function index()
    {

        $a = DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('brand.category_brand', 'frame')
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country', 'image_product.name_image')
            ->get();
        // $a=DB::table('product')
        // ->join('category_product','category_product.id_category','=','product.category_id')
        // ->join('brand','brand.id_brand','=','brand_id')
        // ->join('country','country.id_country','=','country_id')
        // ->select('product.*','category_product.name_category','brand.name_brand','country.name_country')
        // ->get()
        // ;
        
        return view('admin/frame/index', ['data1' => $a]);
    }
    public function delete($id)
    {
        // $a = DB::table('image_product')->where('product_id', $id)->get();
        // foreach ($a as $A) {
        //     if (file_exists(public_path('admin/product/' . $A->name_image))) {
        //         unlink(public_path('admin/product/' . $A->name_image));
        //     }
        // }
        // DB::table('image_product')->where('product_id', $id)->delete();
        // DB::table('product_properties_frame')->where('product_id', $id)->delete();
        // DB::table('product')->where('id_product', $id)->delete();
        
        

        //chuyển dữ liệu thành dữ liệu rác
        $b['delete_at']=Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $b['delete_featured']='1';
        DB::table('product')->where('id_product', $id)->update($b);
        $success = "Succes delete";
        return redirect()->route('admin.product.frame.index')->with('Success', $success);
    }
    public function create(Request $request)
    {

        $brand = DB::table('brand')->where('category_brand', 'frame')->get();
        $country = DB::table('country')->get();
        $category = DB::table('category_product')->where('parent_category', '1')->get();

        //    ['category'=>$category],['country'=>$country],['brand'=>$brand]

        return view('admin/frame/create', compact('category', 'brand', 'country'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_product' => 'unique:product,name_product',

        ],  [
            'name_product.unique' => 'Name Product already exists', //chỗ này ghi tên id phần tử sai dùm

        ]);


        $productList = "name_product,featured_product,
        content_product,category_id,brand_id,country_id,price_product";
        $propertiesList = 'color,material,nose_pads,size';
        $product = $request->only('name_product', 'sale_product', 'featured_product', 'content_product', 'category_id', 'brand_id', 'country_id', 'price_product');
        $product['created_product'] = date('Y-m-d H:i:s');

        DB::table('product')->insert($product);
        // dùng để lưa id product 


        $idProduct = DB::table('product')->where('name_product', $product['name_product'])->select('id_product')->first();

        $properties = $request->only('color', 'material', 'nose_pads', 'size');

        $properties['product_id'] = $idProduct->id_product;
        //in dữ liệu zoo bảng properties
        DB::table('product_properties_frame')->insert($properties);
        $vitri = $request->input('vitri');
        if(!empty($request->file('image_product'))){
        foreach ($request->file('image_product') as $key1 => $file) {

            foreach ($request->input('category_image') as $key2 => $category) {
                if ($key1 == $key2) {
                    $imageName = time() . '' . $file->getClientOriginalName();


                    $img = Image::make($file->getRealPath());
                    if (!file_exists(public_path('admin/product/' . $imageName))) {
                        $img->resize(400, 400)->save(public_path('admin/product/' . $imageName));
                    }


                    echo $file->getClientOriginalName();
                    //khúc dưới đây kiểm tra
                    $data['name_image'] = $imageName;
                    $data['category_image'] = $category;
                    $data['product_id'] = $idProduct->id_product;
                  
                    DB::table('image_product')->insert($data);
                }
            }
        }}
        $success = "Succes creating";
        return redirect()->route('admin.product.frame.create')->with('Success', $success);
    }
    public function edit($id)
    {
        if(!DB::table('product')->where('id_product', $id)->where('product.delete_featured','=','0')->exists()){
            abort(404);
        }
        $brand = DB::table('brand')->where('category_brand', 'frame')->get();
        $country = DB::table('country')->get();
        $category = DB::table('category_product')->where('parent_category', '1')->get();
        $product = DB::table('product')->where('id_product', $id)->first();
        $image = DB::table('image_product')->where('product_id', $id)->get();
        $properties = DB::table('product_properties_frame')->where('product_id', $id)->first();
        //vitri để gán giá trị vô chỗ id="vitri" để add thêm image
        $vitri = DB::table('image_product')->where('product_id', $id)->get()->count();

        return view('admin/frame/edit', compact('brand', 'country', 'category', 'image', 'vitri', 'product', 'properties'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_product' => 'unique:product,name_product,' . $id . ',id_product',

        ],  [
            'name_product.unique' => 'Sản phẩm bị trùng tên', //chỗ này ghi tên id phần tử sai dùm

        ]);


        $productList = "name_product,featured_product,
        content_product,category_id,brand_id,country_id,price_product";
        $propertiesList = 'color,material,nose_pads,size';
        $product = $request->only('name_product', 'sale_product' ,'featured_product', 'content_product', 'category_id', 'brand_id', 'country_id', 'price_product');


        DB::table('product')->where('id_product', $id)->update($product);
        // dùng để lưa id product 




        $properties = $request->only('color', 'material', 'nose_pads', 'size');


        //in dữ liệu zoo bảng properties
        DB::table('product_properties_frame')->where('product_id', $id)->update($properties);
        $vitri = $request->input('vitri');
        if(!empty($request->file('image_product'))){
        foreach ($request->file('image_product') as $key1 => $file) {

            foreach ($request->input('category_image') as $key2 => $category) {
                if ($key1 == $key2) {
                    $imageName = time() . '' . $file->getClientOriginalName();
                    $img = Image::make($file->getRealPath());
                    // chỗ này kiểm tra coi có nhập image
                    if (isset($request->input('old_image')[$key2])) {
                        if (file_exists(public_path('admin/product/'.$request->input('old_image')[$key2]))) {
                            // xóa link ảnh cũ
                            unlink(public_path('admin/product/'.$request->input('old_image')[$key2]));
                        }
                       
                        $img->resize(400, 400)->save(public_path('admin/product/'.$imageName));
                        $data['category_image']=$category ;
                        $data['name_image']=$imageName;
                        DB::table('image_product')->where('name_image',$request->input('old_image')[$key2])->update($data);
                        
                    } else {
                        if (!file_exists(public_path('admin/product/' . $imageName))) {
                            $img->resize(400, 400)->save(public_path('admin/product/'.$imageName));
                        }



                        //khúc dưới đây dành cho trg hợp có ảnh mới
                        $data['name_image'] = $imageName;
                        $data['category_image'] = $category;
                        $data['product_id'] = $id;

                        DB::table('image_product')->insert($data);
                    }
                }
            }
        }}
        $success = "Succes editing";
        return redirect()->route('admin.product.frame.index')->with('Success', $success);
    }
    public function detail($id)
    {   
        $product = DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')          
            ->where('id_product', $id)
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country')
            ->first();
        $image = DB::table('image_product')->where('product_id', $id)->get();
        $properties = DB::table('product_properties_frame')->where('product_id', $id)->first();
        //vitri để gán giá trị vô chỗ id="vitri" để add thêm image
       
       
        return view('admin/frame/detail', compact('product','image','properties'));
    }
}
