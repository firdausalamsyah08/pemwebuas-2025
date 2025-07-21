<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'required|string',
            'service_date' => 'required|date',
            'request' => 'nullable|string',
        ]);

        Booking::create($request->all());

        return back()->with('success', 'Booking submitted successfully!');
    }
}
