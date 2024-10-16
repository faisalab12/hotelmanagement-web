<div>
    <!-- main menu -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1> Booking List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Booking-List">Booking List</a></li>
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
                                        <div class="col-sm-10">
                                            <input wire:model.live.debounce.500ms="search" type="text" class="form-control" placeholder="Search...">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <a wire:navigate href="/Add-Booking" class="btn btn-primary float-end">Add Booking</a>
                                    </div>
                                </div>
                            </div>


                            <!-- Table with stripped rows -->
                            <table class="table datatable table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th>
                                            ID
                                        </th>
                                        <th>User</th>
                                        <th>Booking Date</th>
                                        <th>Room</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <!-- <th scope="row">1</th> -->
                                        <td>{{ $booking -> id }}</td>
                                        <td>{{ $booking -> user -> name }}</td>
                                        <td>{{ $booking -> booking_date }}</td>
                                        <td>
                                            @foreach ($booking -> bookingDetails as $detail)

                                            <p>{{ $detail->room->name_room }} (Rp.{{ $detail->room->price }}) </p>

                                            @endforeach
                                        </td>
                                        <td></td>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->



                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main>
    <!-- End #main -->
</div>