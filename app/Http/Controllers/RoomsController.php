<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        $rooms = Room::get();
        return view('rooms.create', compact('rooms'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
            $input = $request->all();
            Room::create($input);

            return redirect('/room/create');
    }
}
