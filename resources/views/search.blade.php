@extends('layouts.layout')

@section('main')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 0;
        background-color: #f8f8f8;
    }
    .container {
        max-width: 800px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    .legend {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }
    .legend div {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .legend span {
        width: 15px;
        height: 15px;
        display: inline-block;
        border-radius: 50%;
    }
    .green { background-color: green; }
    .yellow { background-color: yellow; }
    .red { background-color: red; }
    .slots-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
        gap: 10px;
    }
    .slot {
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        font-size: 12px;
        transition: 0.3s;
    }
    .open { background-color: #c8e6c9; border: 2px solid green; }
    .pending { background-color: #fff9c4; border: 2px solid yellow; cursor: not-allowed; }
    .booked { background-color: #ffcdd2; border: 2px solid red; cursor: not-allowed; }
    .selected { border: 3px solid blue !important; }
    button {
        width: 100%;
        padding: 10px;
        border: none;
        background: blue;
        color: white;
        font-size: 16px;
        cursor: pointer;
        margin-top: 15px;
    }
    button:disabled {
        background: gray;
        cursor: not-allowed;
    }
</style>

<div class="container">
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
        <div class="slot open" data-id="1">Slot 1</div>
        <div class="slot booked" data-id="2">Slot 2</div>
        <div class="slot pending" data-id="3">Slot 3</div>
        <div class="slot open" data-id="4">Slot 4</div>
        <div class="slot booked" data-id="5">Slot 5</div>
        <div class="slot open" data-id="6">Slot 6</div>
    </div>
    <button id="bookButton" disabled type="submit">Book Now</button>
</form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const slots = document.querySelectorAll(".slot.open");
    const bookButton = document.getElementById("bookButton");
    const selectedSlotsInput = document.getElementById("selectedSlots");
    let selectedSlots = [];

    slots.forEach(slot => {
        slot.addEventListener("click", function () {
            const slotId = this.getAttribute("data-id");

            if (selectedSlots.includes(slotId)) {
                selectedSlots = selectedSlots.filter(id => id !== slotId);
                this.classList.remove("selected");
            } else {
                selectedSlots.push(slotId);
                this.classList.add("selected");
            }

            selectedSlotsInput.value = selectedSlots.join(",");
            bookButton.disabled = selectedSlots.length === 0;
        });
    });
});
</script>
@endsection
