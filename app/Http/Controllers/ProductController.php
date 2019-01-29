<?php

namespace App\Http\Controllers;

use App\Keyword;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('keyword')->latest()->get();
        return view('backend.product.index',compact('products'));
    }
    
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            
            if ($request->hasFile('image'))
            {
                $image = $request->file('image');
                $path = public_path(). '/img/';
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move($path, $filename);
            }else{
                $filename = 'man.png';
            }
            
            $product = new Product();
            
            $product->keyword_id = $data['keyword_id'];
            $product->title = $data['title'];
            $product->body = $data['body'];
            $product->image = $filename;
            
            $product->save();
            
            return redirect('/product')->with('message','Your Added Product Successfully');
        }
        $keywords = Keyword::all();
        return view('backend.product.create',compact('keywords'));
    }
}
