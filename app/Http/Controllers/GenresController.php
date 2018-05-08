<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenresController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Genre::all();
        return view('genre.index', ['user'=>$user, 'items' => $items]);
    }
    
    public function add(Request $request)
    {
        return view('genre.add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Genre::$rules);
        $genre = new Genre;
        $genre -> genre = $request -> genre;
        $genre -> save();
        return redirect('/genre');
    }
}
