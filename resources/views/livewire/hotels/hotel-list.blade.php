<div>
    <!-- main menu -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Hotel List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Daftar-Hotel">Hotel List</a></li>
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
                                        <a wire:navigate href="/Add-Hotel" class="btn btn-primary float-end">Add Hotel</a>
                                    </div>
                                </div>
                            </div>


                            <!-- Table with stripped rows -->
                            <table class="table datatable table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th>
                                            <b>N</b>ame
                                        </th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Stars</th>
                                        <th>Email</th>
                                        <th data-type="date" data-format="DD/MM/YYYY">Check In Time</th>
                                        <th data-type="date" data-format="DD/MM/YYYY">Check Out Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($hotels as $hotel)
                                    <tr>
                                        <!-- <th scope="row">1</th> -->
                                        <td>{{ $hotel -> name_hotel }}</td>
                                        <td>{{ $hotel -> address }}</td>
                                        <td>{{ $hotel -> phone }}</td>
                                        <td>{{ $hotel -> rating }}</td>
                                        <td>{{ $hotel -> email }}</td>
                                        <td>{{ $hotel -> check_in_time }}</td>
                                        <td>{{ $hotel -> check_out_time }}</td>
                                        <td>
                                            <a wire:navigate href="/Daftar-Hotel/{{ $hotel -> id }}/Edit" class="btn btn-warning">Edit</a>
                                            <button
                                                wire:click="DeleteHotel( {{ $hotel -> id }} ) "
                                                wire:confirm="Apakah anda yakin ingin menghapus data ini?"
                                                class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                            {{ $hotels -> links()}}

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main>
    <!-- End #main -->
</div>