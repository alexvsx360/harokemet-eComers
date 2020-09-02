<?php

namespace App\Http\Controllers;

use App\Menu;
use Session;
use App\Http\Requests\MenuRequest;

class MenuController extends MainController
{


    public function index()
    {
        self::$data['menus'] = Menu::all()->toArray();
        return view('cms.menu', self::$data);
    }
    public function create()
    { }
    public function store(MenuRequest $request)
    {
        Menu::save_new($request);
        return redirect('cms/menu');
    }
    public function addMenu()
    {

        return view('cms.menu', self::$data);
    }
    public function show($id)
    { }
    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('sm', 'Menu deleted successfuly');
        return redirect('cms/menu');
    }
    public function edit($id)
    {
        self::$data['menu_item'] = Menu::find($id)->toArray();
        return view('cms.edit_menu', self::$data);
    }
    public function update(MenuRequest $request, $id)
    {
        Menu::update_item($request, $id);
        return redirect('cms/menu');
        Session::flash('sm', 'Menu updated successfuly');
    }
}
