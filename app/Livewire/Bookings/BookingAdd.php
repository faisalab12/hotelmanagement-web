<?php

namespace App\Livewire\Bookings;

use App\Models\BookingDetail;
use App\Models\Room;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class BookingAdd extends Component
{
    #[Title('Add Booking')]

    public $user_id;
    public $booking_date;

    public function render()
    {

        $BookedRooms = BookingDetail::whereDate('checkin', $this->booking_date)->get();

        $AvailableRooms = Room::whereNotIn('id', $BookedRooms->pluck('room_id')->toArray())->get();



        return view('livewire.bookings.booking-add', [
            'users' => User::all(),
            'AvailableRooms' => $AvailableRooms

        ]);
    }
}
