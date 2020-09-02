<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

use App\Product;
use Cart;
use Session;
use App\Order;

class ShopController extends MainController
{
    public function categories()
    {

        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['page_title'] = 'Categories';

        return view('site.content.categories', self::$data);
    }
    public function products($curl)
    {
        self::$data['categories'] = Categorie::all()->toArray();
        Product::getProducts($curl, self::$data);

        self::$data['page_title'] = $curl;

        return view('site.content.products', self::$data);
    }
    public function item($purl)
    {
        Product::getItem($purl, self::$data);
        return view('site.content.item', self::$data);
    }

    public function ajaxAddToCart(Request $request)
    {

        Product::addToCart($request['pid']);
    }
    public function cart()
    {
        self::$data['page_title'] = 'Cart Page';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        Session::flash('sm', 'The Item Addt sucssesfuly');
        return view('site.content.cart', self::$data);
    }
    public function clearCart()
    {
        Cart::clear();
        Session::flash('sm', 'The Cart has bean deleted');
        return redirect('shop/cart');
    }
    public function removeItem($pid)
    {
        Cart::remove($pid);
        return redirect('shop/cart');
    }
    public function updateItem($op, $pid)
    {
        Product::updateCART($op, $pid);
        return redirect('shop/cart');
    }

    public function orderNow()
    {
        if (Cart::isEmpty()) {
            return redirect('shop/cart');
        }
        if (!Session::has('user_id')) {
            return redirect('user/signin?redirect=shop/cart');
        }
        if (!Session::has('user_address', 'user_zip', 'user_country')) {
            $id = Session::get('user_id');

            return redirect('user/edit?redirect=shop/cart');
        }
        Order::save_new();
        Session::flash('sm', 'Your Order Saved, tank you for your Proches ');
        return redirect('logout');
    }
}
