<?php

namespace App\Http\Controllers;

use App\Instrument;
use Illuminate\Http\Request;

class InstrumentsController extends Controller
{
    public function index(Request $request)
    {
        $items = Instrument::all();
        return view('instrument.index', ['items' => $items]);
    }
    
    public function add(Request $request)
    {
        return view('instrument.add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Instrument::$rules);
        $instrument = new Instrument;
        $instrument -> instrument = $request -> instrument;
        $instrument -> save();
        return redirect('/instrument');
    }
}