<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //
        if(is_null(session('cart'))){
            session()->put('cart',[]);
        }
        $incart=false;
        foreach(session('cart') as $item){
            if($item->id == $request->product_id){
                $item->soluong += $request->soluong;
                $incart=true;
                break;
            }
        }
        if(!$incart){
          
            $item = products::find($request->product_id);
            $item->soluong=0;
            $item->soluong += $request->soluong;
            session()->push('cart',$item);
        }
        $kq=[
            'status'=>true,
            'message'=>"Đã thêm sản phẩm vào giỏ hàng!",
            'data'=>session('cart'),
        ];
        return response()->json($kq,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        foreach(session('cart') as $item){
            if($item->id == $id){
                $item->soluong=$request->soluong;
                break;
            }
        }
        $kq=[
            'status'=>true,
            'message'=>"Đã cập nhật sản phẩm vào giỏ hàng!",
            'data'=>session('cart'),
        ];
        return response()->json($kq,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = session('cart');
        session()->forget('cart');
        array_splice($cart,$id,1);
        session()->put('cart',$cart);
        $kq=[
            'status'=>true,
            'message'=>"Đã xóa sản phẩm vào giỏ hàng!",
            'data'=>session('cart'),
        ];
        return response()->json($kq,200);
    }

    public function Cart(Request $request){
        return view('cart');
    }

    public function CheckOut(Request $request)
    {
      $order= new Order();
      $order->user_id = (Auth::check()) ? Auth::user()->id : null;
      $order->user_fullname = $request->fullname;
      $order->user_phone = $request->phone;
      $order->user_email = $request->email;
      $order->user_address = $request->address;
      $order->total_money=0;
      $order->total_soluong=0;
      $order->save();

      foreach(session('cart') as $item){
          $order_detail = new OrderDetail();
          $order_detail->order_id = $order->id;
          $order_detail->product_id = $item->id;
          $order_detail->soluong = $item->soluong;
          $order_detail->price = isNull($item->sale) ? $item->price : $item->sale;
          $order_detail->save(); 
          $order->total_money += $order_detail->soluong *  $order_detail->price;
          $order->total_soluong += $order_detail->soluong;
      }
      $order->save();
      session()->forget('cart');
      return redirect()->route('dathangxong');
    }
    
    public function dathangxong()
    {
        $order = Order::where('user_id', Auth::id())->latest()->first();
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        foreach ($orderDetails as $detail) {
            $product = products::find($detail->product_id);
        }
        return view('dathangxong',compact('order','orderDetails'));
    }

    public function lichsu()
    {
        $order = Order::where('user_id', Auth::id())->latest()->first();
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        foreach ($orderDetails as $detail) {
            $detail->product = products::find($detail->product_id); 
        }

        return view('lichsu',compact('order','orderDetails'));
    }
}

