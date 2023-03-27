<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Http\Requests\GetNewsByCategoryRequest;

class NewsController extends Controller
{
    public function GetNews() {
        $news = News::all();
        return view('home', [
            'news' => $news
        ]);
    }

    public function GetCurrentNews($id, Request $request) {
        $news_detail = News::where('id', '=', (int)$id)->get();
        return view('news_detail', [
            'news_detail' => $news_detail
        ]);
    }

    public function getNewsByCategory(GetNewsByCategoryRequest $request) {
        
        if($request->get('category-id') == 0) {
            $data = News::all()->makeHidden('desx');
            
            foreach($data as $i) {
                $i->category = News::find($i->id)->category->makeHidden('pivot');
                $i->makeHidden('pivot');
            }

            return response()->json(['success' => true, 'data' => $data]);
        
        }
        
        $data = Category::find((int)$request->get('category-id'))
        ->news()
        ->get()
        ->makeHidden('desx');

        foreach($data as $i) {
            $i->category = News::find($i->id)->category->makeHidden('pivot');
            $i->makeHidden('pivot');
        }
        
        return response()->json(['success' => true, 'data' => $data]);
    }

}
