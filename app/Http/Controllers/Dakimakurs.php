<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dakimakuras;

class Dakimakurs extends Controller
{
    public function getAllDaks() {
        $daks = Dakimakuras::all();
        return view('/dakimakurs', [
            'daks' => $daks
        ]);
    }

    public function getCurrentDaks($id) {
        $currentdask = Dakimakuras::where('id', '=', (int)$id)->get();
        return view('dakimaka_detail', [
            'currentdask' => $currentdask,
        ]);
    }
}
