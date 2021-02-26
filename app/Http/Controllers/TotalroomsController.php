<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Totalroom;


class TotalroomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        $getlastRoom = Totalroom::get()->pluck('figure')->last();
        return view('ttr.create', compact('getlastRoom'));
    }

    public function store(Request $request) {
        $request->validate([
            'figure' => 'required',
        ]);
            $input = $request->all();
            Totalroom::create($input);

            return redirect('/home');
    }
}


