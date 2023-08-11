<?php

namespace App\Http\Controllers;

use App\Models\requests;
use App\Models\Rooms;
use Illuminate\Http\Request;
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



       requests::create([
           'room_id'=>$request->room_id,
           'from_id' => $request->user_id
       ]);

        return redirect()->route('preferences');

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
