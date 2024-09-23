<?php

namespace App\Livewire\Bookings;

use App\Models\Booking;
use Livewire\Attributes\Title;
use Livewire\Component;

class BookingList extends Component
{
    #[Title('Add Hotel')]

    public function render()
    {
        return view('livewire.bookings.booking-list', [
            'bookings' => Booking::all()
        ]);
    }
}
