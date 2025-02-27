<?php

namespace App\Http\Controllers;

use App\Model\searchslot;

use Illuminate\Http\Request;

class SearchslotsController extends Controller
{
    public function searchslotsview(Request $request)
    {
        // dd($request->all());

        $location = $request->query('location');
        $date = $request->query('date');
        $time = $request->query('time');



        return view('searchslots', compact('location', 'date', 'time'));
    }
}
