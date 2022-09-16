<?php
    namespace App\helper;
    class CartHelper{
        public $item =[];
        public $total_quantity=0;
        public $total_price =0;
        public function __construct(){
            $this->items =session('cart') ? session('cart') :[];
            $this->item =session('carts') ? session('carts') :[];
            $this->total_price =$this->get_total_price();
            $this->total_quantity =$this->get_total_quantity();
            $this->total_quantitys =$this->get_total_quantitys();
        }
        public function add($product,$quantity =1){
            $item =[
                'id' =>$product->id_product,
                'name' =>$product->name_product,
                'images' =>$product->name_image,
                'price' =>$product->price_product,
                'quantity' =>$quantity,
            ];
            if(isset($this->items[$product->id_product])){
                $this->items[$product->id_product]['quantity']+=$quantity;
               
            }else{
                $this->items[$product->id_product]=$item;
                $this->item[$product->id_product]=$item;
            }
            session(['cart' => $this->items]);
        }
        public function add2($product,$quantity =1){
            $item =[
                'id' =>$product->id_product,
                'name' =>$product->name_product,
                'images' =>$product->name_image,
                'price' =>$product->price_product,
                'quantity' =>$quantity,
            ];
            if(isset($this->item[$product->id_product])){
            
                $this->item[$product->id_product]['quantity']=$quantity;
            }else{
                
                $this->item[$product->id_product]=$item;
            }
            session(['carts' => $this->item]);
        }
        public function remove($id){
            if(isset($this->items[$id])){
                unset($this->items[$id]);
            }
            session(['cart' => $this->items]);
        }
        public function remove2($id){
            if(isset($this->item[$id])){
                unset($this->item[$id]);
            }
            session(['carts' => $this->item]);
        }
        public function update($id,$quantity=1){
            if(isset($this->items[$id])){
                $this->items[$id]['quantity']=$quantity;
            }
            session(['cart' => $this->items]);

        }
        public function clear(){
            session(['cart' => '']);
        }

        private function get_total_price(){
            $t=0;
            foreach($this->items as $item){
                $t+=$item['price']*$item['quantity'];
            }
            return $t ;
        }
        private function get_total_quantity(){
            $t=0;
            foreach($this->items as $item){
                $t+=$item['quantity'];
            }
            return $t ;
        }
        private function get_total_quantitys(){
            $t=0;
            foreach($this->item as $items){
                $t+=$items['quantity'];
            }
            return $t ;
        }
    }
?>
