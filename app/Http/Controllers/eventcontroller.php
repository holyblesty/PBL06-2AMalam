<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('event');
    }

    public function create()
    {
        return view('event_create');
    }

    public function store(Request $request)
    {
        // logika simpan event
        return redirect('/event');
    }
}