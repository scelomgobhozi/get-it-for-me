<?php

namespace App\Http\Controllers;


use App\Models\participants;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        return Inertia::render('CreateGroup');
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
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {



        $request->validate([

            'room_name' => 'required | max:255 | unique:rooms'
        ]);
        $shortTag = str_replace(' ','',$request->room_name);
        $shortLTag= strtolower($shortTag);
        $offUrl = 'http://127.0.0.1:8000/join-room/'.$shortLTag;
        $roomName = $request->room_name;

        Rooms::create([
            'Admin_id' =>  Auth()->id(),
            'room_name' =>$roomName,
            'short_room_name' =>$shortTag,
            'room_url'=>$offUrl



        ]);
        $roomID = Rooms::where('room_name',$roomName)
            ->select('id')
            ->get();


        if(count($roomID) === 1)
        {
            $groupId =$roomID[0]["id"];
            Participants::create([
                'room_id' => $groupId,
                'user_id' => Auth()->id(),
                'admin' => 1

            ]);
            return redirect()->route('create-room')->with([
                'groupUrl'=> $offUrl,
                'message'=> 'Group created successfully'
            ]);

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Inertia::render('CreateGroup',[]);
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
