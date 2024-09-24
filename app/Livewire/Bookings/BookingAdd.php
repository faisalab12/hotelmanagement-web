<?php

namespace App\Livewire\Bookings;

use Livewire\Attributes\Title;
use Livewire\Component;

class BookingAdd extends Component
{
    #[Title('Add Booking')]

    public function render()
    {
        return view('livewire.bookings.booking-add');
    }
}
