<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;

    #[Title('Daftar Hotel')]


    public $search;

    public function render()
    {
        return view('livewire.hotels.hotel-list', [
            'hotels' => Hotel::where('name_hotel', 'like', '%' . $this->search . '%')


                ->paginate(10)

        ]);
    }

    public function DeleteHotel($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return $this->redirect('/Daftar-Hotel', navigate: true);
    }

    public function updatingSearch()
    {
        $this->gotoPage(1);
    }
}
