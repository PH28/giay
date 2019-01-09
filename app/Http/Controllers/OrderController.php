<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $productId = $request->input('id');
        $productName = $request->input('name');
        $quantityOrder = $request->input('quantity_order');
        $priceOrder = $request->input('price');
        $totalOrder = $priceOrder * $quantityOrder;
        return view('orders.create',compact('productId','productName','quantityOrder','priceOrder','totalOrder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();

        $email = $user ->email;

        $order = new Order;
        $order->user_id = User::where('email',$email)->value('id');
        $order->receiver_name = $request->input('name');
        $order->total = $totalOrder;
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->save();
        
        $orderId = DB::table('orders')->where([
            ['name', '=', $request->input('name')],
            ['phone', '=', $request->input('phone')],
            ['addrress', '=', $request->input('address')],
        ])->last()->value('id');

        $orderDetail = new OrderDetail;
        $orderDetail->order_id = $orderId;
        $orderDetail->product_id = $productId;
        $orderDetail->quantity = $quantityOrder;
        $orderDetail->total_price = $totalOrder;

        $productUpdate = Product::where('id', $productId)->get();
        $productUpdate->quantity = $productUpdate->quantity - $quantityOrder;
        $productUpdate->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
