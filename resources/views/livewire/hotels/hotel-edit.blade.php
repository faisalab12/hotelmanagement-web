<div>
    <!-- main menu -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Data Hotel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Daftar-Hotel">Daftar Hotel</a></li>
                    <li class="breadcrumb-item active"><a href="/Add-Hotel">Edit Data Hotel</a></li>
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
                                        <h2 class="card-title">Edit Data Hotel</h2>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>

                            <form wire:submit.prevent="EditHotel">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama hotel</label>
                                    <div class="col-sm-10">
                                        <input wire:model="name_hotel" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea wire:model="address" class="form-control" style="height: 100px" required></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label" required>No. Telepon</label>
                                    <div class="col-sm-10">
                                        <input wire:model="phone" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Bintang</label>
                                    <div class="col-sm-10">
                                        <select wire:model="rating" class="form-select" aria-label="Default select example" required>
                                            <option selected="">Open this select menu</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input wire:model="email" type="email" class="form-control" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">CheckIn</label>
                                    <div class="col-sm-10">
                                        <input wire:model="check_in_time" type="datetime-local" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">CheckOut</label>
                                    <div class="col-sm-10">
                                        <input wire:model="check_out_time" type="datetime-local" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">edit</button>
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