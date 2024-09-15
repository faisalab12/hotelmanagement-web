<div>
    <!-- main menu -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Daftar Kamar</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Room-List">Room List</a></li>
                    <li class="breadcrumb-item active"><a href="/Add-Room">Tambah Daftar Kamar</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="card-title">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="card-title">Tambah Daftar Kamar</h2>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>

                            <form wire:submit.prevent="AddRoom">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kamar</label>
                                    <div class="col-sm-10">
                                        <input wire:model="name_room" type="text" class="form-control" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Type Room</label>
                                    <div class="col-sm-10">
                                        <select wire:model="room_type_id" class="form-control" required>
                                            <option>Open this select room type</option>
                                            @foreach($roomTypes as $roomType)
                                            <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label" required>Floor</label>
                                    <div class="col-sm-10">
                                        <input wire:model="floor" type="number" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <a wire:navigate href="/Daftar-Hotel" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main>
    <!-- End #main -->
</div>