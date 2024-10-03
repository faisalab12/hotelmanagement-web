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
                <div class="col-lg-12">

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

                            <form wire:submit.prevent="addBooking">

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
                                    @foreach($AvailableRooms as $AvailableRoom)
                                    <li class="list-group-item list-group-item-action">{{ $AvailableRoom -> name_room }} <button class="btn btn-primary float-end">Book Now</button></li>
                                    @endforeach
                                </ul>
                                @endif




                            </form>


                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main>
    <!-- End #main -->
</div>