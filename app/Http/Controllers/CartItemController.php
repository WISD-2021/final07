<?php

namespace App\Http\Controllers;

use App\Models\Cart_item;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Member;
use App\Http\Requests\StoreCart_itemRequest;
use App\Http\Requests\UpdateCart_itemRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid =DB::table('members')->where('user_id' ,Auth::user()->id)->first();
        $carts = DB::table('cart_items')
            ->join('equipment', 'cart_items.equipment_id', '=', 'equipment.id')
            ->join('members', 'cart_items.member_id', '=', 'members.id')
            ->where('cart_items.member_id', $userid)
            ->select('cart_items.id',
                'equipment.name',
                'equipment.rentprice',
                'equipment.img',
                'cart_items.quantity')
            ->get();
        return view('cart.index', $carts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCart_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCart_itemRequest $request)
    {
        $userid =DB::table('members')->where('user_id' ,Auth::user()->id)->first();DB::table('members')->where('id' ,auth()->user()->id)->first();

        $cart = new cartitem();
        $cart->member_id = $userid;
        $cart->equipment_id = $request->input('e_id');
        //$cart->rentprice = $request->input('price');
        $cart->quantity = $request->input('num');
        $cart->save();

        $Cart_items = Cart_item::orderBy('id', 'ASC')->paginate(20);
        $data = [
            'Cart_item' => $Cart_items
        ];
        return view('cart.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_item $cart_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_item $cart_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCart_itemRequest  $request
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCart_itemRequest $request, Cart_item $cart_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_item $cart_item)
    {
        Cart_item::destroy($cart_item);
        return redirect()->route('rentcart.index');
    }
    static public function total()
    {
        $total = 0;
        return $total;
    }
}
