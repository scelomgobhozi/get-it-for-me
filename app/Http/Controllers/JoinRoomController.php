<?php

namespace App\Http\Controllers;

use App\Models\requests;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class JoinRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return Inertia::render('JoinGroup');
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

     $roomID= $request->room_id;
     $userN= $request->user_id;
     $groupAdmin = $request->admin_id;


   $uid = Auth()->id();
     $doesUserExist = requests::where('from_id',$uid)
                               ->where('room_id', $roomID)->get();

     echo $doesUserExist;
//     dd(count($doesUserExist));
     if(count($doesUserExist)==0){
         requests::create([
             'room_id'=>$roomID,
             'from_id' => $uid,
             'admin_id'=>$groupAdmin
         ]);
               return redirect()->route('dashboard')->with('message','Request successfully sent');
     }else{
         return redirect()->route('dashboard')->with('message','Something went wrong');
     }


    }

    /**
     * Display the specified resource.
     */
    public function show($key)
    {

        $rooms = Rooms::where('short_room_name',$key)
                 ->get();


        if(!count($rooms) || count($rooms)>1 ){
            echo 'Something went wrong';
        }

        return Inertia::render('JoinGroup',[
            'groupDetails' => $rooms
        ]);
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
