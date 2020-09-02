<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use Hash;


class User extends Model
{

   public static function signin($email, $password)
   {

      $verify = false;

      $user = DB::table('users as u')
         ->Join('users_role as ur', 'u.id', '=', 'ur.user_id')
         ->Join('users_datas as ud', 'u.id', '=', 'ud.user_id')
         ->select('u.*', 'ur.role_id', 'ud.address', 'ud.country', 'ud.zip', 'ud.phone')
         ->where('u.email', '=', $email)
         ->first();

      if ($user && Hash::check($password, $user->password)) {
         if ($user->role_id == 6) {

            Session::put('is_admin', true);
         }
         Session::put('user_name', $user->name);
         Session::put('user_email', $user->email);
         Session::put('user_id', $user->id);
         Session::put('user_zip', $user->zip);
         Session::put('user_country', $user->country);
         Session::put('user_phone', $user->phone);
         Session::put('user_address', $user->address);
         Session::flash('sm', 'Welcome back ' . $user->name);
         $verify = true;
      }

      return $verify;
   }

   public static function upData($id)
   {

      $data = DB::table('users_datas')
         ->join('users', 'users_datas.user_id', '=', 'users.id')
         ->select('*')
         ->where('users.id', '=', $id)
         ->get();
      return $data->toArray();
   }
   public static function save_new($request)
   {

      $user = new self();
      $user->name = $request['name'];
      $user->email = $request['email'];
      $user->password = bcrypt($request['password']);
      $user->save();
      $uid = $user->id;
      DB::insert("INSERT INTO users_role VALUES($uid, 7)");
      DB::insert("INSERT INTO users_datas (user_id) VALUES ('$uid')");
      Session::put('user_name', $user->name);
      Session::put('user_id', $user->id);
      Session::flash('sm', 'You are now signup to Harokemet ');
   }
   public static function save_data($request, $id)
   {


      $data = DB::table('users_datas')
         ->join('users', 'users_datas.user_id', '=', 'users.id')
         ->select('*')
         ->where('users.id', '=', $id)
         ->update(
            [
               'name' => $request['name'],
               'email' => $request['email'],
               'first_name' => $request['first_name'],
               'last_name' => $request['last_name'],
               'phone' => $request['phone'],
               'address' => $request['address'],
               'country' => $request['country'],
               'state' => $request['state'],
               'zip' => $request['zip']
            ]
         );

      Session::put('user_name', $request['name']);
      Session::put('user_email', $request['email']);
      Session::put('user_zip', $request['zip']);
      Session::put('user_country', $request['country']);
      Session::put('user_phone', $request['phone']);
      Session::put('user_address', $request['address']);
   }
   public static function save_massage($request)
   {

      $massage = new self();
      $massage->name = $request['name'];
      $massage->email = $request['email'];
      $massage->massage = $request['massage'];
      $massage->save();


      Session::flash('sm', 'your massage have ben sent ');
   }
   public static function getUserData($id)
   {
      $data = DB::table('users_datas')
         ->join('users', 'users_datas.user_id', '=', 'users.id')
         ->select('*')
         ->where('users.id', '=', $id)
         ->get();
      return $data->toArray();
   }
}
