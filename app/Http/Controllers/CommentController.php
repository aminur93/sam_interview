<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Keyword;
use App\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('keyword','products')->latest()->get();
        return view('backend.comment.index',compact('comments'));
    }
    
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            
            $comment = new Comment();
            
            $comment->keyword_id = $data['keyword_id'];
            $comment->product_id = $data['product_id'];
            $comment->comment = $data['comment'];
            
            $comment->save();
            
            return redirect('/comment')->with('message','Your comment post successfully');
        }
        $keywords = Keyword::all();
        $products = Product::all();
        return view('backend.comment.create',compact('keywords','products'));
    }
}
