<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Session;

class Categorie extends Model
{
   static public function save_new($request)
   {
      $image_name = 'def-img.jpg';

      if ($request->hasFile('image') && $request->file('image')->isValid()) {
         $file = $request->file('image');
         $image_name = date('Y-m-d-h-i-s') . '-' . $file->getClientOriginalName();
         $request->file('image')->move(public_path() . '/img/', $image_name);
         $img = Image::make(public_path() . '/img/' . $image_name);
         $img->resize(800, 800);
         $img->save();
      }

      $category = new self();
      $category->ctitle = $request['ctitle'];
      $category->curl = $request['curl'];
      $category->cimage = $image_name;
      $category->carticle = $request['carticle'];
      $category->save();
      Session::flash('sm', 'Category created successfuly');
   }
   static public function update_item($request, $id)
   {

      $image_name = '';

      if ($request->hasFile('image') && $request->file('image')->isValid()) {
         $file = $request->file('image');
         $image_name = date('Y-m-d-h-i-s') . '-' . $file->getClientOriginalName();
         $request->file('image')->move(public_path() . '/img/', $image_name);
         $img = Image::make(public_path() . '/img/' . $image_name);
         $img->resize(800, 800);
         $img->save();
      }

      $category = self::find($id);
      $category->ctitle = $request['ctitle'];
      $category->curl = $request['curl'];
      if ($image_name) {
         $category->cimage = $image_name;
      }
      $category->carticle = $request['carticle'];
      $category->save();
      Session::flash('sm', 'Category updated successfuly');
   }
}
