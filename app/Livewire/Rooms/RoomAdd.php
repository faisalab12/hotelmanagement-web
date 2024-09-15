<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use App\Models\RoomType;
use Livewire\Attributes\Title;
use Livewire\Component;

class RoomAdd extends Component
{
    #[Title('Add Room')]

    public $name_room;
    public $room_type_id;
    public $floor;


    public function render()
    {
        return view('livewire.rooms.room-add', [
            'roomTypes' => RoomType::all()
        ]);
    }

    public function AddRoom()
    {
        // dd($this->all());
        Room::create($this->all());

        return $this->redirect('/Room-List', navigate: true);
    }
}
