@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
@endsection

@section('main')
    <div class="container parking_container">
        <h1>Parking Slot Selection</h1>

        <div class="legend">
            <div><span class="green"></span> Open</div>
            <div><span class="yellow"></span> Pending</div>
            <div><span class="red"></span> Booked</div>
        </div>

        <form id="bookingForm" method="POST" action="{{ route('book.parking') }}">
            @csrf
            <input type="hidden" name="slots" id="selectedSlots" value="">
            <div class="slots-container">
                <div class="slot open" data-id="1">A1</div>
                <div class="slot booked" data-id="2">A2</div>
                <div class="slot pending" data-id="3">A3</div>
                <div class="slot open" data-id="4">A4</div>
                <div class="slot booked" data-id="5">A5</div>
                <div class="slot open" data-id="6">A6</div>
            </div>
            <button id="bookButton" disabled type="submit">Book Now</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {
            const $slots = $(".slot.open");
            const $bookButton = $("#bookButton");
            const $selectedSlotsInput = $("#selectedSlots");
            let selectedSlots = [];

            $slots.on("click", function() {
                const slotId = $(this).data("id");

                if (selectedSlots.includes(slotId)) {
                    selectedSlots = selectedSlots.filter(id => id !== slotId);
                    $(this).removeClass("selected");
                } else {
                    selectedSlots.push(slotId);
                    $(this).addClass("selected");
                }

                $selectedSlotsInput.val(selectedSlots.join(","));
                $bookButton.prop("disabled", selectedSlots.length === 0);
            });
        });
    </script>
@endsection
