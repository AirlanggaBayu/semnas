 <!-- summernote -->
 <link rel="stylesheet" href="<?= base_url('assets/admin') ?>/plugins/summernote/summernote-bs4.min.css">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Artikel</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Artikel</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <?php if ($this->session->flashdata('error')) { ?>
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <?= $this->session->flashdata('error'); ?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
         <?php } ?>
         <div class="row">
             <div class="col-md-12">
                 <div class="card card-outline card-info">
                     <form action="<?= base_url('admin/artikel/update') ?>" method="post" enctype="multipart/form-data">
                         <div class="card-header">
                             <h3 class="card-title">
                                 Artikel <?= $artikel[0]->gambar ?>
                             </h3>
                             <div class="float-right">
                                 <button type="submit" class="btn btn-primary">Simpan</button>
                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="text-center my-3">
                                 <img src="<?= base_url('img/artikel/') . $artikel[0]->gambar ?>" class="rounded" alt="...">
                             </div>
                             <div class="form-group">
                                 <input type="file" name="gambar" class="form-control" id="gambar">
                             </div>
                             <div class="form-group">
                                 <textarea id="summernote" name="isi">
                             <?= $artikel[0]->isi ?>
              </textarea>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             <!-- /.col-->
         </div>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- Summernote -->
 <script src="<?= base_url('assets/admin') ?>/plugins/summernote/summernote-bs4.min.js"></script>
 <script>
     $(function() {
         // Summernote
         $('#summernote').summernote()

         // CodeMirror
         CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
             mode: "htmlmixed",
             theme: "monokai"
         });
     })
 </script>