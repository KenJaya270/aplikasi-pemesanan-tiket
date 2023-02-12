<div class="bg-primary p-2">
    <div class="container-fluid d-flex align-items-center justify-content-center landing-page-container">
        <div class="text-center">
            <h1 class="text-white">PEMESANAN <b>TIKET</b></h1>
            <span class="text-white small">Pesan Tiket Kereta dan Pesawat disini aja!</span>
        </div>
    </div>
</div>
<div class="container-fluid container-sm --margin-top d-flex">
    <div class="list-group tipe-kendaraan">
        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center pesawat">
            <i class="fa fa-plane text-primary" aria-hidden="true"></i>
            <span class="ml-2">Pesawat</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action kereta">
            <i class="fa fa-train text-warning" aria-hidden="true"></i>
            <span class="ml-2">Kereta</span>
        </a>
    </div>
    <div class="card container">
        <div class="card-body p-2">
            <h5 class="font-weight-bolder mb-3 text-dark jenisTransportasi">Pesawat</h5>
            <form action="" method="post" class="user form-pencarian">
                <div class="pesawat-container-form w-100">
                    <div class="w-100">
                        <div class="form-group d-flex justify-content-between">
                            <div class="pr-2 w-100">
                                <label for="" class="text-dark font-weight-bolder">Dari</label>
                                <input id="" type="text" class="form-control">
                            </div>
                            <div class="pr-2 w-100">
                                <label for="" class="text-dark font-weight-bolder">Ke</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div class="w-100">
                                <label class="font-weight-bolder text-dark" for="">Jumlah Penumpang</label>
                                <input type="number" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-flex">
                        <div class="form-group w-100 pr-2">
                            <label for="" class="text-dark font-weight-bolder">Tanggal Berangkat</label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                        <div class="w-100">
                            <label class="text-dark font-weight-bolder" for="">Tipe Kelas</label>
                            <select name="" id="" class="form-control">
                                <option value="ekonomi">Ekonomi</option>
                                <option value="ekonomi">Premium Ekonomi</option>
                                <option value="ekonomi">Business</option>
                                <option value="ekonomi">Kelas Satu</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn bg-warning text-white" type="submit">Cari Tiket</button>

                    </div>
                </div>

                <div class="d-none kereta-form-container w-100">
                    <div class="form-group d-xl-flex">
                        <div class="pr-2 w-100">
                            <label for="" class="text-dark font-weight-bolder">Dari</label>
                            <input id="" type="text" class="form-control col-12">
                        </div>
                        <div class="w-100">
                            <label for="" class="text-dark font-weight-bolder">Ke</label>
                            <input type="text" name="" id="" class="form-control col-12">
                        </div>
                    </div>
                    <div class="form-group d-xl-flex">
                        <div class="w-100">
                            <label for="" class="text-dark font-weight-bolder">Tanggal Berangkat</label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                        <div class="col-5">
                            <label for="" class="text-dark font-weight-bolder">Jumlah Penumpang</label>
                            <input min="1" max="7" type="number" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-warning" type="submit">Cari Tiket</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>