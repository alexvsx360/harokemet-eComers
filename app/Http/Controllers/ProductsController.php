<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Product;
use Session;
use App\Http\Requests\ProductsRequest;
class ProductsController extends MainController
{


   public function index(){
       self::$data['products'] = Product::all()->toArray();
       self::$data['categories'] = Categorie::all()->toArray();
       return view('cms.products',self::$data);
   }
   public function create(){

  }
  public function store(ProductsRequest $request){
    Product::save_new($request);
      return redirect('cms/products');
  }
   public function addProduct()
   {
     
       return view('cms.products', self::$data);
   }
   public function show($id)
   {
   
   }
   public function destroy($id)
   {
    Product::destroy($id);
    Session::flash('sm','Product deleted successfuly');
       return redirect('cms/products'); 
      
   }
   public function edit($id)
   {
    self::$data['categories'] = Categorie::all()->toArray();
    self::$data['products_item'] = Product::find($id)->toArray();
    return view('cms.edit_products', self::$data);
   }
   public function update(ProductsRequest $request, $id)
   {
    Product::update_item($request, $id);
    Session::flash('sm','Product updated successfuly');
      return redirect('cms/products');
      
   }

}