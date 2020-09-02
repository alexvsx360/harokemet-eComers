<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

use App\Product;
use Session;
use App\Order;
use App\User;
use App\Massage;

class CmsController extends MainController
{

    public function orders()
    {

        Order::getAll(self::$data);
        return view('cms.orders', self::$data);
    }
    public function editOrders($id)
    {
        self::$data['orders'] = Order::find($id)->toArray();
        return view('cms.edit_orders', self::$data);
    }
    public function dashboard()
    {
        self::$data['orders'] = order::All()->toArray();
        self::$data['products'] = Product::All()->toArray();
        self::$data['users'] = User::All()->toArray();
        self::$data['massages'] =  Massage::All()->toArray();
        self::$data['x'] = 0;
        self::$data['y'] = 0;
        self::$data['z'] = 0;
        self::$data['a'] = 0;
        self::$data['d'] = 0;
        self::$data['u'] = 0;
        self::$data['s'] = 0;
        return view('cms.index.dashboard', self::$data);
    }
    public function categories()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['page_title'] = 'Edit Categories';
        return view('cms.content.categories', self::$data);
    }
    public function products($curl)
    {
        Product::getProducts($curl, self::$data);
        return view('cms.content.products', self::$data);
    }
    public function item($purl)
    {
        Product::getItem($purl, self::$data);
        return view('cms.content.item', self::$data);
    }
    public function orderUpdate($id, Request $request)
    {
        Order::saveOrders($request, $id);
        return redirect('cms/orders');
        Session::flash('sm', 'Order updated successfuly');
    }
    public function getMassage()
    {

        Massage::getAll(self::$data);
        return view('cms.massage', self::$data);
    }
    public function destroyMassage($id)
    {
        Massage::destroy($id);
        Session::flash('sm', 'Massage deleted successfuly');
        return redirect('cms/massage');
    }
}
