<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Preferences;
use App\Models\requests;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
//        return Inertia::render('GroupRequest');
        $uid = Auth()->id();
        $roomRequest = requests::where('admin_id',$uid)->get();
        $joinedRoom = DB::table('requests')
                     ->join('rooms','requests.room_id','=','rooms.id')
                     ->join('users','requests.from_id','=','users.id')
                     ->select('requests.*','rooms.room_name','users.name','users.email','users.phone')
                     ->where('requests.admin_id',$uid)
                    ->get();
 //       dd($roomRequest);
        return Inertia::render('GroupRequest',[
            'room_request' => $joinedRoom
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = $request->admin_id;
        $requester= $request->from_id;
        $room_id = $request->room_id;



        // 1 Check if room and admin are already exist
        // Check if the requestee is already a participant
        // if they do exist
        // add the requestee as admin of the group


       $RAexist = rooms::where('Admin_id',$admin)
                          ->where('id',$room_id)->get();

       $isParticipant = participants::where('room_id',$room_id)
           ->where('user_id', $requester)
           ->get();

  //     dd(count($RAexist) , count($isParticipant));
       if ($RAexist && count($isParticipant) === 0 ){


           participants::create([
             'room_id'=>$room_id,
               'user_id'=>$requester,
               'admin'=>0
           ]);
           requests::where('room_id', $room_id )
                      ->where('from_id',$requester)->delete();
           return redirect()->back();

       }else{
           return redirect()->route('request.show')->with([

               'message'=> 'Something went wrong !!!'
           ]);
       }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
