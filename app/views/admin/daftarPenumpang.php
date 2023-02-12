<div class="d-flex justify-content-between align-items-center container mt-lg-4">
    <h2>Daftar Penumpang</h2>
    <div>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahPetugasModal">Tambah Penumpang</button>
    </div>
</div>
<div class="container mt-2">
    <?php Flasher::flash(); ?>
</div>
<div class="container mt-2">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Telpon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Telpon</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['penumpang'] as $penumpang) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $penumpang['nama_penumpang'] ?></td>
                        <td><?= $penumpang['username'] ?></td>
                        <td><?= $penumpang['alamat_penumpang'] ?></td>
                        <td><?= date('d M Y', strtotime($penumpang['tanggal_lahir'])) ?></td>
                        <td><?= $penumpang['telfone'] ?></td>
                        <td>
                            <div class="dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="userDropdown">
                                    <div class="dropdown-header">Aksi:</div>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#editPenumpangModal<?= $penumpang['id_penumpang'] ?>">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= BASEURL ?>/admin/hapusPenumpang/<?= $penumpang['id_penumpang'] ?>">Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal Tambah Petugas -->
<div class="modal fade" id="tambahPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Petugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= BASEURL ?>/admin/insertPenumpang" method="post" class="user">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_penumpang">Nama Penumpang</label>
                        <input type="text" name="nama_penumpang" id="nama_penumpang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telfone">Telpon</label>
                        <input type="tel" name="telfone" id="telfone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat_penumpang">Alamat Penumpang</label>
                        <textarea type="text" name="alamat_penumpang" id="alamat_penumpang" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Update Petugas -->
<?php foreach ($data['penumpang'] as $penumpang) : ?>
    <div class="modal fade" id="editPenumpangModal<?= $penumpang['id_penumpang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Penumpang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= BASEURL ?>/admin/updatePenumpang" method="post" class="user">
                    <div class="modal-body">
                        <input type="hidden" name="id_penumpang" id="id_penumpang" value="<?= $penumpang['id_penumpang'] ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $penumpang['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_penumpang">Nama Penumpang</label>
                            <input type="text" name="nama_penumpang" id="nama_penumpang" class="form-control" value="<?= $penumpang['nama_penumpang'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $penumpang['tanggal_lahir'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_penumpang">Alamat Penumpang</label>
                            <textarea type="text" name="alamat_penumpang" id="alamat_penumpang" class="form-control"><?= $penumpang['alamat_penumpang'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option selected readonly><?= $penumpang['jenis_kelamin'] ?></option>
                                <option value="laki-laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telfone">Telephone</label>
                            <input type="tel" name="telfone" id="telfone" class="form-control" value="<?= $penumpang['telfone'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>