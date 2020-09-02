<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart;
use DB;

class Order extends Model
{
    public static function save_new()
    {
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->order_data = serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Session::flash('sm', 'Your order saved');
        Cart::clear();
    }
    static public function getAll(&$data)
    {
        $data['orders'] = DB::table('users AS u')
            ->Join('orders AS o', 'u.id', '=', 'o.user_id')
            ->orderBy('o.created_at', 'desc')
            ->get();
    }
    static public function getOrder($id)
    {

        $data = DB::table('users AS u')
            ->Join('orders AS o', 'u.id', '=', 'o.user_id')
            ->select('*')
            ->where('o.user_id', '=', $id)
            ->orderBy('o.created_at', 'desc')
            ->paginate(4);
        return $data;
    }
    static public function update_item($request, $id)
    {
        $order = self::find($id);
        $order->ship_number = $request->ship;
        $order->save();
        Session::flash('sm', 'Order updated successfuly');
    }
    static public function saveOrders($request, $id)
    {

        $orders = self::find($id);
        $orders->ship_number = $request['ship'];
        $orders->save();
        Session::flash('sm', 'Traking number add successfuly');
    }
}
