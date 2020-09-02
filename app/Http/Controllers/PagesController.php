<?php

namespace App\Http\Controllers;


use App\Http\Requests\MassageRequest;
use App\Content;
use App\Massage;
use App\Order;
use App\Product;
use App\User;
use Session;

class PagesController extends MainController
{

    public function home()
    {

        self::$data['page_title'] = 'home Page';
        self::$data['orders'] = order::All()->toArray();
        self::$data['products'] = Product::All()->toArray();
        self::$data['users'] = User::All()->toArray();
        self::$data['x'] = 0;
        self::$data['y'] = 0;
        self::$data['z'] = 0;
        self::$data['a'] = 0;
        return view('site.content.welcome', self::$data);
    }
    public function contact()
    {

        self::$data['page_title'] = 'Contact Us';
        return view('site.content.contact', self::$data);
    }

    public function massage(MassageRequest $request)
    {

        Massage::save_new($request);
        Session::flash('sm', 'Massage sent successfuly');
        return redirect('');
    }


    public function content($url)
    {
        Content::getByUrl($url, self::$data);
        return view('site.content.dynamic_content', self::$data);
    }
}
