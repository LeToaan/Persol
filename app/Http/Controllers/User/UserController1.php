<?php 
    namespace App\Http\Controllers\User;
    use Illuminate\Http\Request;
    use App\Models\Product;
    use App\helper\CartHelper;
    use DateTime;
    use Session;
    use App\Cart;
    use Image;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth;
    use App\Mail\ContactMail;
    use Mail;

    class UserController1 extends Controller{
        public function home(request $request){
            $ip=$request->ip();
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
            $data['name_ip']=$ip;
            $data['create_ip']=$timestart;
             $a=DB::table('ip')->where('name_ip',$ip)->exists();
             if(!$a){
                 DB::table('ip')->insert($data);
             }else {
            DB::table('ip')->where('name_ip',$ip)->update($data);
            }
              $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                 $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
             $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
             //cai time nay cua product nha may ban
             $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
            $frame=DB::table('product')
          
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('brand.category_brand','frame')
            ->where('product.delete_featured','=','0')
            ->whereBetween('created_product',[$timestart,$timeend])
            ->select('product.*', 'brand.name_brand',  'image_product.name_image','brand.category_brand','category_product.name_category')
            ->orderby('product.created_product','desc')
            ->take(4)
            ->get();
            $lenses=DB::table('product')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')  
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('brand.category_brand','lenses')
            ->where('product.delete_featured','=','0')
            ->whereBetween('created_product',[$timestart,$timeend])
            ->select('product.*', 'brand.name_brand',  'image_product.name_image','brand.category_brand','category_product.name_category')
            ->orderby('product.created_product','desc')
            ->take(4)
            ->get();
            $featuredframe=DB::table('product')
         
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')  
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('brand.category_brand','lenses')
            ->where('product.delete_featured','=','0')
            ->where('sale_product','!=',null)
            ->select('product.*', 'brand.name_brand',  'image_product.name_image','brand.category_brand','category_product.name_category')
            ->orderby('product.featured_product','desc')
            ->take(4)
            ->get();
            $featuredlenses=DB::table('product')
          
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')  
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('brand.category_brand','frame')
            ->where('product.delete_featured','=','0')
            ->where('sale_product','!=',null)
            ->select('product.*', 'brand.name_brand',  'image_product.name_image','brand.category_brand','category_product.name_category')
            ->orderby('product.featured_product','desc')
            ->take(4)
            ->get();
            return view('user/home/index',compact('frame','lenses','featuredframe','featuredlenses','nowIp'));
        }
        public function about(){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                 $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
             $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            return view('user/about/index',compact('nowIp'));
        }
        public function shop($page){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
        $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
            $products=DB::table('product')
          
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('category_product','category_product.id_category','=','product.category_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'image_product.name_image','category_product.name_category','brand.category_brand')
            ;
            $totalPage=ceil($products->get()->count()/12);
            $products=$products->skip(12*($page-1))->take(12)->get();
            
            $product3=DB::table('product')
         
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('category_product','category_product.id_category','=','product.category_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'image_product.name_image','category_product.name_category','brand.category_brand')
            ->orderby('product.featured_product','desc')
            ->take(4)
            ->get();
        
            return view('user/shop/index',compact('nowIp','products','totalPage','page','product3','timestart','timeend'));
        }
        public function contact(){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            return view('user/contact/index',compact('nowIp'));
        }
        public function MailContact(Request $request){
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg,
            ];
            Mail::to('thaitoan553@gmail.com')->send(new ContactMail($details));
            return back()->with('message_sent','Your message has been sent successfully!');
        }

        public function single($id){
            if(!DB::table('product')->where('id_product', $id)->where('product.delete_featured','=','0')->exists()){
                abort(404);
            }
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            $product2=DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('image_product.category_image', 'index')
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country', 'image_product.name_image')
            ->take(10)->get();
            //product chính 
            $productsIndex=DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->where('id_product', $id)
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country','brand.category_brand')
            ->first();
            $properties=DB::table('product_properties_'.$productsIndex->category_brand)->where('product_id',$id)->first();  
           
            $imagesIndex=DB::table('image_product')->where('product_id', $id)->where('category_image','like','%index%')->get();
            $imagesColor=DB::table('image_product')->where('product_id', $id)->where('category_image','not like','%index%')->get();
            //số sao trung bình
            $rate=DB::table("rating_product")->where('product_id', $id)->avg('rate');
            //tổng số sao đánh giá
            $countRate=DB::table("rating_product")->where('product_id', $id)->count();
            $comment=DB::table("rating_product")->join('account','account.id','=','rating_product.account_id')->where('product_id',$id)
            ->select('rating_product.*','account.username_account')->take(10)->get();
            //comment của account
            if(Auth::check()){
                $userComment=DB::table("rating_product")->where('product_id', $id)->where('account_id',Auth::user()->id)->first();
                
            }else{
                $userComment=null;
            }
            
           return view('user/single/index',compact('product2','productsIndex','imagesIndex','imagesColor',
           ('nowIp'),'properties','rate','countRate','comment','userComment'));
        }
       
        public function checkout(CartHelper $cart){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            
            return view('user/checkout/index',compact('nowIp'));
        }
        public function order(request $request,$name){
            
            return redirect('user/checkout/index');
        }
        public function customer(){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            return view('user/customer/index',compact('nowIp'));
        }
        public function error(){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            return view('user/error/index',compact('nowIp'));
        }
        public function payment(){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
            $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
        $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            return view('user/payment/index',compact('nowIp'));
        }
      
        public function search2(request $request){
            if($request->get('min')>$request->get('max')){
                $error='min can not bigger than max';
                return back()->with('error',$error);
            }
            $request->session()->put('search',$request->except('_token'));
            // DD($request->session()->get('search'));
            return redirect('shop/search/page=1');
        }
        public function search(request $request,$page){
          
                $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
            $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
                $products=DB::table('product')
                ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
                ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
                ->join('country', 'country.id_country', '=', 'country_id')
                ->join('image_product', 'image_product.product_id', '=', 'id_product')
                ->where('product.delete_featured','=','0')
                ->where('image_product.category_image', 'index') ;
                $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
                $request->session()->put('new',false);
                foreach($request->session()->get('search') as $key => $value){
                    switch($key){
                        case 'name':
                            
                            if(!empty($value)) $products=$products->where('product.name_product','LIKE','%'. strtolower($value).'%');
                            break;
                        case 'min':
                            if(!empty($value))$products=$products->where('product.price_product','>=',$value);
                            break;
                        case 'max':
                            if(!empty($value))$products=$products->where('product.price_product','<=',$value);
                            break;
                        case 'featured':
                            if($value=='hot'){
                                $products=$products->where('product.featured_product','1');
                            }else if($value=='new'){
                                $products->whereBetween('created_product',[$timestart,$timeend]);
                                $request->session()->put('new',false);
                            }
                            break;
                        case 'category':
                            if(!empty($value)) $products=$products->where('brand.category_brand','=',$value);
                            break;
                            case 'sale':
                                if(!empty($value)) $products=$products->where('sale_product','!=',null);
                                break;
                    
                    }
                  
                }
                $products=$products->select('product.*', 'brand.name_brand','brand.category_brand', 'category_product.name_category', 'country.name_country', 'image_product.name_image');
                $totalPage=ceil($products->get()->count()/12);
               $products=$products->skip(12*($page-1))->take(12)->get();
      
                $product3=DB::table('product')
            
                ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
                ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
                ->join('image_product', 'image_product.product_id', '=', 'id_product')
                ->where('image_product.category_image', 'index')
                ->where('product.delete_featured','=','0')
                ->select('product.*', 'brand.name_brand', 'image_product.name_image','brand.category_brand','category_product.name_category')
                ->orderby('product.featured_product','desc')
                ->take(4)
                ->get();
              
            
              return view('user/shop/index',compact('nowIp','products','totalPage','page','product3','timestart','timeend'));
               
               
            }
        // public function addcart(request $req,$id){
        //     $product=Product::where('id',$id)->first();
        //     if($product != null){
        //         $oldcart = Session('cart') ? Session('cart'): null ;
        //         $newcart =new Cart($oldcart);
        //         $newcart->addcart($product,$id);

        //         $req->session()->put('cart',$newcart);
              
        //     }
        //     return view('user/cart/index',compact('newcart'));
        // }
            //cart
            public function view(){
                $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
            $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
                return view('user/checkout/index',compact('nowIp'));
            }
            public function view2(CartHelper $carts){
                $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
            $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            $a=0;
            $products=array();
            $propertieses=array();
                
            foreach($carts->item as $cart){
                $product=DB::table('product')->join('brand', 'brand.id_brand', '=', 'product.brand_id')->where('id_product',$cart['id'])->select('brand.category_brand')->first();
                
                $properties=DB::table('product_properties_'.$product->category_brand)->where('product_id',$cart['id'])->select('*')->first();
                $product=DB::table('product')
                ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
                ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
                ->join('country', 'country.id_country', '=', 'country_id')
                ->join('image_product', 'image_product.product_id', '=', 'id_product')
                ->where('image_product.category_image', 'index')
                ->where('id_product', $cart['id'])
                ->where('product.delete_featured','=','0')
                ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country','brand.category_brand','image_product.name_image')
                ->first();
               if($a==3){
                   break;
               }
                $products[$a]=$product;
                $propertieses[$a]=$properties;
                $a++;
            
            }
           
                return view('user/checkout/index2',compact('nowIp','products','propertieses'));
            }
            public function add(CartHelper $cart,$id){
                $products=DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('id_product', $id)
            ->where('image_product.category_image', 'index')
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country','brand.category_brand','image_product.name_image')
            ->take(3)->first();
            
           
                $cart->add($products);
              
                
                return redirect()->back();
            }
            public function add2(CartHelper $carts,$id){
                $products=DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('id_product', $id)
            ->where('image_product.category_image', 'index')
            ->where('product.delete_featured','=','0')
            ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country','brand.category_brand','image_product.name_image')
            ->first();
            
            
        
               $carts->add2($products);
              
                
               return redirect()->back();
            }
            public function remove(CartHelper $cart,$id){
                $cart->remove($id);
                return redirect()->back();
            }
            public function remove2(CartHelper $carts,$id){
                $carts->remove2($id);
                return redirect()->back();
            }
            public function update(CartHelper $cart,$id,$quantity){
                $quantity= request()->quantity ? request()->quantity :1;
                $cart->update($id,$quantity);
                return redirect()->back();
            }
            public function clear(CartHelper $cart){
                $cart->clear();
                return redirect()->back();
            }
          
            //endcart
            public function searchProperties(request $request,$category,$name,$properties,$page){
            
                $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
            $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->toDateTimeString();
            $products=DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.category_id')
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
            ->join('country', 'country.id_country', '=', 'country_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->join('product_properties_'.$category,'product_properties_'.$category.'.product_id','=','id_product');
            if($name!='category'){
                if($name=='brand'){
                    $products=$products->where('brand.name_brand','=',$properties);
                }elseif($name='material'){
                    $products=$products->where('product_properties_'.$category.'.material','=',$properties);
                }
            }else{
                $products=$products->where('brand.category_brand','=',$category);
            }
            $products=$products ->where('image_product.category_image', 'index')
             ->select('product.*', 'brand.name_brand', 'category_product.name_category', 'country.name_country', 'image_product.name_image','brand.category_brand');
             $totalPage=ceil($products->get()->count()/12);
             $products=$products->skip(12*($page-1))->take(12)->get();
             $product3=DB::table('product')
        
            ->join('brand', 'brand.id_brand', '=', 'product.brand_id')
           ->join('category_product','category_product.id_category','=', 'product.category_id')
            ->join('image_product', 'image_product.product_id', '=', 'id_product')
            ->where('product.delete_featured','=','0')
            ->where('image_product.category_image', 'index')
            ->select('product.*', 'brand.name_brand',  'image_product.name_image','category_product.name_category','brand.category_brand')
            ->orderby('product.featured_product','desc')
            ->take(4)
            ->get();
            return view('user/shop/index',compact('products','nowIp','page','totalPage','product3','timestart'));
            }
        public function checkcommand(request $request,$id){
            
            $success='true';
           $rate=$request->except('_token');
          $id_account= $rate['account_id']=Auth::user()->id;
           $rate['product_id']=$id;
          if(DB::table('rating_product')->where('product_id',$id)->where("account_id",$id_account)->exists()){
            DB::table('rating_product')->where('product_id',$id)->where("account_id",$id_account)->update($rate);
          }else{
            DB::table('rating_product')->where('product_id',$id)->where("account_id",$id_account)->insert($rate);
          }

            return back()->with('success',$success);
        }
        public function profile(){
            $timestart=Carbon::now('Asia/Ho_Chi_Minh')->subHour()->toDateTimeString();
                $timeend=Carbon::now('Asia/Ho_Chi_Minh')->addMinute()->toDateTimeString();
            $nowIp=DB::table('ip')->whereBetween('create_ip',[$timestart,$timeend])->get()->count();
            return view('user/profile/index',compact('nowIp'));
        }
            
        public function saveprofile(request $request,$id){
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
                if(!empty(Auth::user()->image_account)) {
                    if (file_exists(public_path('admin/user/' . Auth::user()->image_account))) {
                        unlink(public_path('admin/user/' . Auth::user()->image_account));
                    }
                }
                $image = $request->file('image_account');
                
                $imageName = time() . '.' . $image->extension();
                
                
                $img = Image::make($image->getRealPath());
    
                $img->resize(400, 400)->save(public_path('admin/user/' . $imageName));
                $a['image_account'] = $imageName;
            }
    
    
            DB::table('account')->where('id', $id)->update($a);
            $success = "Succes editing";
            return redirect('profile');
       
        }

            
    }