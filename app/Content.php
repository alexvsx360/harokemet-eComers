<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;


class Content extends Model
{
    public static function getByUrl($url, &$data)
    {
        $contents = DB::table('contents as c')
            ->join('menus as m', 'm.id', '=', 'c.menu_id')
            ->select('c.*', 'm.mtitle')
            ->where('m.murl', '=', $url)
            ->get()
            ->toArray();
        if (!$contents) {
            abort(404);
        }
        $data['page_title'] = $contents[0]->mtitle;
        $data['contents'] = $contents;
    }
    public static function save_new($request)
    {

        $content = new self();
        $content->menu_id = $request['menu_id'];
        $content->ctitle1 = $request['ctitle1'];
        $content->carticle1 = $request['carticle1'];
        $content->ctitle2 = $request['ctitle2'];
        $content->carticle2 = $request['carticle2'];
        $content->ctitle3 = $request['ctitle3'];
        $content->carticle3 = $request['carticle3'];
        $content->save();
        Session::flash('sm', 'Content created');
    }
    public static function update_item($request, $id)
    {

        $content = self::find($id);
        $content->menu_id = $request['menu_id'];
        $content->ctitle1 = $request['ctitle1'];
        $content->carticle1 = $request['carticle1'];
        $content->ctitle2 = $request['ctitle2'];
        $content->carticle2 = $request['carticle2'];
        $content->ctitle3 = $request['ctitle3'];
        $content->carticle3 = $request['carticle3'];
        $content->save();
        Session::flash('sm', 'Content updated');
    }
}
