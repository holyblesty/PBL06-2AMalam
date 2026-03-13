<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket');
    }

    public function store(Request $request)
    {
        // logika simpan tiket
        return redirect('/ticket');
    }
}