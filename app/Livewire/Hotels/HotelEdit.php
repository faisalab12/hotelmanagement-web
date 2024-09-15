<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;

class HotelEdit extends Component
{
    #[Title('Edit Data Hotel')]

    public $name_hotel;
    public $address;
    public $phone;
    public $rating;
    public $email;
    public $check_in_time;
    public $check_out_time;

    public $hotel;

    public function mount($id)
    {
        $this->hotel = Hotel::find($id);
        $this->name_hotel = $this->hotel->name_hotel;
        $this->address = $this->hotel->address;
        $this->phone = $this->hotel->phone;
        $this->rating = $this->hotel->rating;
        $this->email = $this->hotel->email;
        $this->check_in_time = $this->hotel->check_in_time;
        $this->check_out_time = $this->hotel->check_out_time;
    }
    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }

    public function EditHotel()
    {
        $this->hotel->update($this->all());
        return $this->redirect('/Daftar-Hotel', navigate: true);
    }
}
