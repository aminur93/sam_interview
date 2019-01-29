<?php

namespace App\Http\Controllers;

use App\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    public function index()
    {
        $keywords = Keyword::latest()->get();
        return view('backend.keyword.index',compact('keywords'));
    }
    
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            
            $keyword = new Keyword();
            
            $keyword->name = $data['name'];
            $keyword->score = $data['score'];
            
            $keyword->save();
            
            return redirect('/keyword');
        }
        return view('backend.keyword.create');
    }
}
