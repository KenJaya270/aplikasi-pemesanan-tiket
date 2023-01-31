<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <div class="text-center">
                            <?php Flasher::flash(); ?>
                        </div>
                        <form class="user" method="post" action="<?= BASEURL ?>/auth/insertUser">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="username">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama_penumpang">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword">
                            </div>
                            <div class="form-group row mb-2">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-user" id="exampleInputEmail" name="tanggal_lahir">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">No. Telp</label>
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="telfone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea class="form-control" id="exampleInputEmail" name="alamat_penumpang"></textarea>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= BASEURL ?>/auth">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>