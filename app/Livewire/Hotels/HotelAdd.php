<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;

class HotelAdd extends Component
{
    #[Title('Add Hotel')]

    public $name_hotel;
    public $address;
    public $phone;
    public $rating;
    public $email;
    public $check_in_time;
    public $check_out_time;


    public function render()
    {
        return view('livewire.hotels.hotel-add');
    }

    public function AddHotel()
    {
        // dd($this->all());
        Hotel::create($this->all());
        return $this->redirect('/Daftar-Hotel', navigate: true);
    }
}
