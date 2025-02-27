<?php

namespace App\Http\Controllers;
use App\Models\parkingslot;

use Illuminate\Http\Request;

class parkingslotController extends Controller

{
    public function checkAvailability(Request $request)
    {
        $request->validate([
            'location' => 'required|exists:parking_lots,id',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
        ]);

        $parkingLot = ParkingLot::findOrFail($request->location);
        $selectedDateTime = Carbon::parse($request->date . ' ' . $request->time);

        // Get all slots for the parking lot
        $slots = ParkingSlot::where('parking_lot_id', $parkingLot->id)
            ->with(['bookings' => function ($query) use ($selectedDateTime) {
                $query->where('start_time', '<=', $selectedDateTime)
                    ->where('end_time', '>', $selectedDateTime)
                    ->where('status', '!=', 'cancelled');
            }])
            ->get();

        $availableSlots = $slots->filter(function ($slot) {
            return $slot->bookings->isEmpty() && $slot->status === 'available';
        });

        return response()->json([
            'total_slots' => $slots->count(),
            'available_slots' => $availableSlots->count(),
            'slots' => $availableSlots->map(function ($slot) {
                return [
                    'id' => $slot->id,
                    'slot_number' => $slot->slot_number,
                    'type' => $slot->type,
                ];
            }),
        ]);
    }

}
