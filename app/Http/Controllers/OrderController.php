<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        return view('frontend/order/checkout');
    }
    public function place_an_order(Request $request)
    {
        $user = Auth::user();

        //dd($user);

        //retrieve cart items
        //$cartItems = $customer->cartItems()->get();
        $cartItems = Cart::where('customer_id', $user->id)->get();
        //dd($cartItems);

        if($cartItems->isEmpty()){
            return redirect()->route('cart.index')->with('error','Your cart is empty.');
        }
      //Begin transaction to ensure data integrity
      DB::beginTransaction();

      try{
        //create an order
        $order = Order::create([
            'customer_id' => $user->id,
            'total_amount' =>$cartItems->sum(fn($cart)=> $cart->product->price * $cart->qty),
            'order_status' => OrderStatus::ORDER_PLACED,// or 'created',depending on your workflow
        ]);

        //store order items
        foreach ( $cartItems as $row){
            $order->orderItems()->create([
                'product_id'=> $row->product_id,
                'qty'=> $row->qty,
                'unit_price' => $row->product->price,
                'discount' => 0,
                'amount' => $row->qty * $row->product->price
            ]);
        }

        //clear the cart
        $user->cartItems()->delete();

        //commit transaction
        DB::commit();

        //redirect to payment gateway or order confirmation
        return redirect()->route('order.confirmation',$order->id)
            ->with('success','Order placed successfully.');

      }catch(\Exception $e){
        //rollback transaction in case of error
        DB::rollback();
        //throw new /Exception('something went wrong.');
        throw new \Exception($e);
        //return redirect()->route('cart.index')->with('error','something went wrong.please try again.' .$e);
      }

    }
    public function confirmation(Request $request)
    {
        $user = Auth::user();

        $order = Order::where('customer_id', $user->id)
                ->orderBy('created_at','desc')
                ->first();
        //dd($order);

        //Retrieve all cities for use in the view
        $cities = City::all();

        //Retrieve all category for use in the view
        $category = Category::all();

        $data =[
            'order' => $order,
            'category' => $category,
            'cities' => $cities,
        ];
        return view('frontend/order/confirmation', $data);


    }
    public function order_history($id)
    {
        $history = OrderHistory::where('order_id', $id)->get();

        //dd($history);
        return view('frontend/order_history',compact('history'));
    }
}
