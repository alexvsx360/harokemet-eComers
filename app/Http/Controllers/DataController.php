<?php

namespace App\Http\Controllers;


use App\Http\Requests\DataRequest;
use App\User;
use Session;
use DB;
use App\Order;

class DataController extends MainController
{
  public function __construct()
  {

    parent::__construct();
    $this->middleware('myguard');
  }


  public function postdata(DataRequest $request)
  {
    if (!Session::has('user_id')) {
      return redirect('user/signin');
    } else {
      $id =  Session::get('user_id');
      User::save_data($request, $id);
      Session::flash('sm', 'Your Personal data has been changed ');
      return redirect('user/my');
    }
  }
  public function edit()
  {
    self::$data['page_title'] = 'Edit Contact';
    if (!Session::has('user_id')) {
      return redirect('user/signin');
    } else {
      $id =  Session::get('user_id');
      self::$data['user_item'] = User::upData($id);

      return view('site.forms.user_edit', self::$data);
    }
  }
  public function getMy()
  {

    if (!Session::has('user_id')) {
      return redirect('user/signin');
    } else {
      $id = Session::get('user_id');
      self::$data['page_title'] = 'My account';
      self::$data['user_item'] = User::getUserData($id);

      if (Order::getOrder($id)) {
        self::$data['order_item'] = Order::getOrder($id);
      }


      return view('site.forms.my', self::$data);
    }
  }
}
