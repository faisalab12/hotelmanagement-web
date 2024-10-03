<?php

namespace App\Livewire\Bookings;

use App\Models\BookingDetail;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Attributes\Title;
use Livewire\Component;

class BookingAdd extends Component
{
    #[Title('Add Booking')]

    public $user_id;
    public $booking_date;

    public $details = [];

    public $availableRooms;

    public function render()
    {

        $bookedRooms = BookingDetail::whereDate('checkin', $this->booking_date)->get();

        $this->availableRooms = Room::whereNotIn('id', $bookedRooms->pluck('room_id')->toArray())->get();



        if (!empty($this->details)) {
            $detailRooms = array_filter($this->details, function ($detail) {
                return $detail['date'] == $this->booking_date;
            });


            $detailRooms = Arr::pluck($detailRooms, 'room_id');

            $this->availableRooms = $this->availableRooms->filter(function ($room) use ($detailRooms) {
                return !in_array($room->id, $detailRooms);
            });
        }

        return view('livewire.bookings.booking-add', [
            'users' => User::all(),
            'availableRooms' => $this->availableRooms,
            'details' => $this->details,


        ]);
    }

    public function booking($room)
    {
        $this->details[] = [
            'room_id' => $room['id'],
            'name_room' => $room['name_room'],
            'date' => $this->booking_date

        ];
    }
}
