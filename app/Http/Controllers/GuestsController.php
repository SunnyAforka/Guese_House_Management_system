<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Guest;
use App\Models\Room;

class GuestsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $guests= Guest::orderByDesc('name')->paginate(10);
        return view('guests.index', compact('guests'));
    }

    public function create() {
        $rooms = Room::get();
        return view('guests.create', compact('rooms'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'ref_no' => '',
            'email' => '',
            'phone_no' => '',
            'room_no' => 'required',
            'room_type' => 'required',
            'amnt_pd' => 'required',
            'balance' => '',
        ]);
            $input = $request->all();
            Guest::create($input);

            return redirect('/guests/index');
    }

    public function destroy(Guest $guest) {
        $guest = Guest::find($guest);
        $guest->each->delete();

        return redirect()->back();
    }

    public function search(Request $request) {
        $search = $request->get('search');
        $guests = Guest::where('name', 'like', '%' .$search. '%')
                            ->orWhere('ref_NO', 'like', '%' .$search. '%')
                            ->orWhere('phone_no', 'like', '%' .$search. '%')
                            ->orWhere('email', 'like', '%' .$search. '%')
                            ->orWhere('room_no', 'like', '%' .$search. '%')
                            ->orWhere('room_type', 'like', '%' .$search. '%')
                            ->paginate(10);
        return view('/guests/search', compact('guests', 'search'));
    }

}
