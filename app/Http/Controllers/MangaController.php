<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    public function getManga() {
        $manga = Manga::all();
        return view('/manga', [
            'manga' => $manga,
        ]);
    }
    
    public function getCurrentManga($id) {
        $manga_detail = Manga::where('id', '=', (int)$id)->get();
        return view('manga_detail', [
            'manga_detail' => $manga_detail,
        ]);
    } 

}
