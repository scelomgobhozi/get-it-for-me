<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Inertia\Response
    {
//        $seeUser = messages::where('room_id',$id)->get();
//        dd($seeUser);
        $fullTable = DB::table('messages')
            ->join('users','messages.from_id','=','users.id')
            ->select('users.name','messages.*')
            ->get();
        dd($fullTable);

       return Inertia::render('Message',[
          'messages' => messages::where('room_id', $id)->get()
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
