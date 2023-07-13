<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Inertia\Inertia;

class dashboardController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Dashboard',[
            'compact' => Rooms::all()
            ]);
    }
}
