<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Cart;
use Session;
use Image;

class Product extends Model
{


    public static function getAll()
    {
        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.curl')
            ->get();
        return $products;
    }

    public static function getProducts($curl, &$data)
    {
        $products = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->where('c.curl', '=', $curl)
            ->select('p.*', 'c.ctitle', 'c.curl', 'c.cimage')
            ->inRandomOrder()
            ->paginate(6);


        if ($products[0]) {

            $data['products'] = $products;
            $data['page_title'] = $products[0]->ctitle . 'products';
        } else {
            abort(404);
        }
    }
    public static function getItem($purl, &$data)
    {
        if ($item = Product::where('purl', '=', $purl)->first()) {
            $data['item'] = $item->toArray();
            $data['page_title'] = $data['item']['ptitle'] . ' ' . ' product';
        } else {
            abort(404);
        }
    }

    public static function addToCart($pid)
    {
        if (!empty($pid) && is_numeric($pid)) {
            if ($product = self::find($pid)) {
                $product = $product->toArray();
                if (!Cart::get($pid)) {
                    Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage']]);
                    Session::flash('sm', $product['ptitle'] . 'added to cart!');
                }
            }
        }
    }
    public static function updateCart($op, $pid)
    {
        if (!empty($pid) && is_numeric($pid) && Cart::get($pid)) {
            if (!empty($op)) {

                if ($op === 'plus') {
                    Cart::update($pid, ['quantity' => 1]);
                } elseif ($op === 'minus') {
                    Cart::update($pid, ['quantity' => -1]);
                }
            }
        }
    }
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

        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['ptitle'];
        $product->purl = $request['purl'];
        $product->pimage = $image_name;
        $product->price = $request['price'];
        $product->particle = $request['particle'];
        $product->save();
        Session::flash('sm', 'Product created successfuly');
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

        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['ptitle'];
        $product->purl = $request['purl'];
        if ($image_name) {
            $product->pimage = $image_name;
        }
        $product->price = $request['price'];
        $product->particle = $request['particle'];
        $product->save();
        Session::flash('sm', 'Product updated successfuly');
    }
}
