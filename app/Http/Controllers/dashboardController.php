<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class dashboardController extends Controller
{
    public function index(): \Inertia\Response
    {
        $uid = Auth()->id();
        $allRooms = DB::table('participants')
            ->join('rooms','participants.room_id','=','rooms.id')

           // ->select('rooms.id','rooms.room_name')
               ->select("participants.user_id",'rooms.id','rooms.room_name')
            ->where('participants.user_id','=', $uid)
            ->get();

        $reversedRoom = DB::table('rooms')
            ->join('participants','rooms.id' ,'=','participants.room_id')
            ->select('rooms.*')
            ->get();
        $chatGPTidea = DB::table('users')
            ->join('participants','users.id','=','participants.user_id')
            ->join('rooms','participants.room_id','=','rooms.id')
            ->select('rooms.id','rooms.room_name')
            ->get();


        $original = participants::where('user_id',$uid)
            ->join('rooms','participants.room_id','=','rooms.id')
            ->get();


        return Inertia::render('Dashboard',[
            'compact' => $allRooms
            ]);
    }
}
