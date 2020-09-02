<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;



class Massage extends Model
{

    public static function save_new($request)
    {

        $massage = new self();
        $massage->name = $request['name'];
        $massage->email = $request['email'];
        $massage->massage = $request['massage'];
        $massage->save();


        Session::flash('sm', 'your massage have ben sent ');
    }
    static public function getAll(&$data)
    {
        $data['massages'] = DB::table('massages AS m')
            ->orderBy('m.created_at', 'desc')
            ->get();
    }
}
