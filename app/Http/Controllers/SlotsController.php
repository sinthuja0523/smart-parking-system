<?php

namespace App\Http\Controllers;

use App\Model\searchslot;

use Illuminate\Http\Request;

class SlotsController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());

        $location = $request->query('location');
        $date = $request->query('date');
        $time = $request->query('time');
        $slots = \DB::table('slots')->get();

        return view('search',compact('slots'));
    }
    public function book(Request $request)
{
    dd($request->all());
    $selectedSlots = $request->input('slots');

    // Process booking logic here (e.g., save to database)

    return response()->json(['message' => 'Booking successful test!']);
}
}
