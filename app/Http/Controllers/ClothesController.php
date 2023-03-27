<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use Illuminate\Database\Eloquent\Collection;

class ClothesController extends Controller
{
    public function GetAllClothes() {
        $clothes = Clothes::all();
        return view('/clothes', [
            'clothes' => $clothes
        ]);
    }
    public function GetCurrentClothes(Request $request, $id) {
        $currentclothes = Clothes::where('id', '=', (int)$id)->get();
        return view('/clothes_detail', [
            'currentclothes' => $currentclothes
        ]);
    }
}
