<?php

namespace App\Http\Controllers;

use App\Content;
use App\Menu;
use Session;
use App\Http\Requests\ContentRequest;

class ContentController extends MainController
{


    public function index()
    {
        self::$data['menus'] = Menu::all()->toArray();
        self::$data['contents'] = Content::all()->toArray();
        return view('cms.content', self::$data);
    }
    public function create()
    { }
    public function store(ContentRequest $request)
    {
        content::save_new($request);
        return redirect('cms/content');
    }
    public function addMenu()
    {

        return view('cms.content', self::$data);
    }
    public function show($id)
    { }
    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('sm', 'Content deleted successfuly');
        return redirect('cms/content');
    }
    public function edit($id)
    {
        self::$data['menus'] = Menu::all()->toArray();
        self::$data['content_item'] = Content::find($id)->toArray();
        return view('cms.edit_content', self::$data);
    }
    public function update(ContentRequest $request, $id)
    {
        Content::update_item($request, $id);
        return redirect('cms/content');
        Session::flash('sm', 'Content updated successfuly');
    }
}
