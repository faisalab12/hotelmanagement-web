<div>
    <!-- main menu -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Daftar Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Booking-List">Booking List</a></li>
                    <li class="breadcrumb-item active"><a href="/Add-Booking">Tambah Daftar Booking</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">

                            <div class="card-title">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="card-title">Tambah Daftar Booking</h2>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-10">
                                    <select wire:model="user_id" class="form-control" aria-label="Default select example" required>
                                        <option>Open this select user</option>

                                        @foreach($users as $user)
                                        <option value="{{ $user -> id }}"> {{ $user -> name }} </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label" required>Booking Date</label>
                                <div class="col-sm-10">
                                    <input wire:model="booking_date" type="date" class="form-control">
                                </div>
                            </div>
                            @if($booking_date)
                            <br>
                            <h4><b>Available Room</b></h4>
                            <ul class="list-group">
                                @foreach($availableRooms as $availableRoom)
                                <li class="list-group-item list-group-item-action">{{ $availableRoom -> name_room }}
                                    <button wire:click='booking( {{ $availableRoom }})' class="btn btn-primary float-end">Book Now</button>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">

                            <div class="card-title">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="card-title">Booking Details</h2>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>


                            @if(!empty($details))
                            <ul class="list-group">
                                @foreach($details as $detail)
                                <li class="list-group-item list-group-item-action">{{ $detail ['name_room'] }}
                                    <button class="btn btn-primary float-end">{{ $detail['date'] }}</button>
                                </li>
                                @endforeach
                            </ul>

                            <button wire:click='save' class="btn btn-sm btn-success btn-mt-5">Add Book</button>

                            @endif

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
    <!-- End #main -->
</div>