<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pembicara</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pembicara</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pembicara</h3>
                            <div class="float-right">
                                <button class="btn btn-primary text-right" data-toggle="modal" data-target="#create">Buat Pembicara</button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pembicara</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pembicara as $index => $pembicaras) { ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= $pembicaras->nama_pembicara; ?></td>
                                            <td><?= $pembicaras->keterangan; ?></td>
                                            <td>
                                                <div class=""><button class="btn btn-primary" id="edit" data-id="<?= $pembicaras->no ?>">Update</button>
                                                    <a href="<?= base_url('admin/pembicara/delete/') . $pembicaras->no ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Pembicara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/pembicara/simpan') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pembicara</label>
                        <input type="text" class="form-control" name="pembicara" aria-describedby="emailHelp" placeholder="Masukkan Pembicara">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Pembicara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/pembicara/update') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="kode" name="kode">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pembicara</label>
                        <input type="text" class="form-control" name="pembicara" id="pembicara" aria-describedby="emailHelp" placeholder="Masukkan Pembicara">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('table tbody ').on('click', '#edit', function() {
            $('#update').modal('show');
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: "<?= base_url('admin/pembicara') ?>/getpembicara",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    $('#kode').val(data[0]['no']);
                    $('#pembicara').val(data[0]['nama_pembicara']);
                    $('#keterangan').val(data[0]['keterangan']);
                }
            });
        })
    })
</script>