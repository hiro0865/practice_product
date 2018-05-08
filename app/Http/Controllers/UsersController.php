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