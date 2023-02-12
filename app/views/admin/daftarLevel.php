<div class="d-flex justify-content-between align-items-center container mt-2">
    <h2>Daftar Level</h2>
    <div>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahLevelModal">Tambah Level</button>
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
                    <th>Nama Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nama Level</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['level'] as $level) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $level['nama_level'] ?></td>
                        <td>
                            <div class="dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu shadow animated--fade-in" aria-labelledby="userDropdown">
                                    <div class="dropdown-header">Aksi:</div>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#editLevelModal<?= $level['id_level'] ?>">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= BASEURL ?>/admin/hapusLevel/<?= $level['id_level'] ?>">Hapus</a>
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
<!-- Modal Tambah Level -->
<div class="modal fade" id="tambahLevelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Level</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= BASEURL ?>/admin/insertLevel" method="post" class="user">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_level">Nama Level</label>
                        <input type="text" name="nama_level" id="nama_level" class="form-control">
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
<?php foreach ($data['level'] as $level) : ?>
    <div class="modal fade" id="editLevelModal<?= $level['id_level'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Level</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= BASEURL ?>/admin/updateLevel" method="post" class="user">
                    <div class="modal-body">
                        <input type="hidden" name="id_level" id="id_level" value="<?= $level['id_level'] ?>">
                        <div class="form-group">
                            <label for="nama_level">Nama Level</label>
                            <input type="text" name="nama_level" id="nama_level" class="form-control" value="<?= $level['nama_level'] ?>">
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