<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\word;

class GameController extends Controller
{
    public function index()
    {
        $word = Word::inRandomOrder()->first()->word;
        return view('game',['word' => $word]);
    }
}
