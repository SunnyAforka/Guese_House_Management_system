<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Totalroom;
use App\Models\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         //Get comment count
         $getlastRoom = Totalroom::get()->pluck('figure')->last();
         $guest_count = Guest::count();
         $room_count = Room::count();
         $available_room = $getlastRoom - $guest_count;

        return view('home', compact('guest_count', 'room_count', 'available_room', 'getlastRoom'));
    }
}
