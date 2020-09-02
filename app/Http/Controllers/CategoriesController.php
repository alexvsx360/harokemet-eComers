<?php

namespace App\Http\Controllers;
use App\Categorie;
use Session;
use App\Http\Requests\CategoriesRequest;
class CategoriesController extends MainController
{


   public function index(){
       self::$data['categories'] = Categorie::all()->toArray();
       return view('cms.categories',self::$data);
   }
   public function create(){

  }
  public function store(CategoriesRequest $request){
      Categorie::save_new($request);
      return redirect('cms/categories');
  }
   public function addCategory()
   {
     
       return view('cms.categories', self::$data);
   }
   public function show($id)
   {
   
   }
   public function destroy($id)
   {
    Categorie::destroy($id);
    Session::flash('sm','Category deleted successfuly');
       return redirect('cms/categories'); 
       Session::flash('sm','Category deleted successfuly');
   }
   public function edit($id)
   {
    self::$data['categories_item'] = Categorie::find($id)->toArray();
    return view('cms.edit_categories', self::$data);
   }
   public function update(CategoriesRequest $request, $id)
   {
    Categorie::update_item($request, $id);
      return redirect('cms/categories');
      Session::flash('sm','Category updated successfuly');
   }

}