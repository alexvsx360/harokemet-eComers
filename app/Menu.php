<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Session;

class Menu extends Model
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
    static public function save_new($request)
    {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->murl = $request['url'];
        $menu->mtitle = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu created successfuly');
    }
    static public function update_item($request, $id)
    {
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->murl = $request['url'];
        $menu->mtitle = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu updated successfuly');
    }
}
