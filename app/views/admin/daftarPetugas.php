<div class="d-flex justify-content-between align-items-center container mt-2">
    <h2>Daftar Petugas</h2>
    <div>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahPetugasModal">Tambah Petugas</button>
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
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['petugas'] as $petugas) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $petugas['nama_petugas'] ?></td>
                        <td><?= $petugas['username'] ?></td>
                        <td><?= $petugas['nama_level'] ?></td>
                        <td>
                            <div class="dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="userDropdown">
                                    <div class="dropdown-header">Aksi:</div>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#editPetugasModal<?= $petugas['id_petugas'] ?>">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= BASEURL ?>/admin/hapusPetugas/<?= $petugas['id_petugas'] ?>">Hapus</a>
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
            <form action="<?= BASEURL ?>/admin/insertPetugas" method="post" class="user">
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
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
                    </div>
                    <input type="hidden" name="id_level" id="id_level" value="1">
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
<?php foreach ($data['petugas'] as $petugas) : ?>
    <div class="modal fade" id="editPetugasModal<?= $petugas['id_petugas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Petugas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= BASEURL ?>/admin/updatePetugas" method="post" class="user">
                    <div class="modal-body">
                        <input type="hidden" name="id_petugas" id="id_petugas" value="<?= $petugas['id_petugas'] ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $petugas['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="<?= $petugas['nama_petugas'] ?>">
                        </div>
                        <input type="hidden" name="id_level" value="<?= $petugas['id_level'] ?>">
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