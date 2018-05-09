<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function mypage(Request $request)
    {
        $user = Auth::user();
        return view('mypage',['user'=>$user]);
    }
    public function edit(Request $request)
    {
        $user = Auth::user();
        return view('edit',['form'=>$user]);
    }
    public function update(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->instrument_id = $request->instrument_id;
        $user->genre_id = $request->genre_id;
        $user->comment = $request->comment;
        $user->save();
        return redirect('/mypage');
    }
    
    public function index(Request $request)
    {
        $items = User::all();
        return view('user.index',['items'=>$items]);
    }
    public function add(Request $request)
    {
        return view('user.add');
    }
    public function create(Request $request)
    {
        
    }
}