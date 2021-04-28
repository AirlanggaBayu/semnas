        <section class="py-0" id="home">
            <div class="bg-holder d-none d-sm-block" style="">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-sm-none" style="background-image:url(<?= base_url()?>/assets/public/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-md-100">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 display-2 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-8">Seminar Nasional 2021 <br class="d-block d-lg-none d-xl-block" />Politeknik Negeri Jember</h1>
                    </div>
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <img src="<?= base_url()?>/assets/public/assets/img/logo-polije.png" width="450" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="bg-holder" style="background-image:url(<?= base_url(); ?>/assets/public/assets/img/illustrations/bg.png);background-position:left top;background-size:initial;margin-top:-180px;">
            </div>
            <!--/.bg-holder-->

            <div class="container" id="tentang">
                <div class="row flex-center">
                    <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="<?= base_url();?>/assets/public/assets/img/illustrations/passion.png" width="450" alt="" /></div>
                    <div class="col-md-5 text-center text-md-start">
                        <h6 class="fw-bold fs-2 fs-lg-3 display-3 lh-sm">Tentang Seminar</h6>
                        <p class="my-4 pe-xl-8"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container" id="jadwal">
                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="py-8">
                <div class="row flex-center">
                    <div class="col-md-11 col-lg-6 col-xl-4 col-xxl-5">
                        <h6 class="fs-3 fs-lg-4 lh-sm">Jadwal</h6>
                    </div>
                </div>
                <table class="table">
                <tbody>
                    <tr>
                    <td>Tanggal</td>
                    <td>Jadwal</td>
                    <tr>
                    <?php foreach ($jadwal as $index => $jadwals){?>
                    <td><?= $jadwals->tanggal?></td>
                    <td><?= $jadwals->deskripsi?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>

                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->


            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
        <section class="py-8">
            <div class="container-lg"  id="pembicara">
                <div class="row flex-center">
                    <div class="col-md-11 col-lg-6 col-xl-4 col-xxl-5">
                        <h6 class="fs-3 fs-lg-4 lh-sm">Pembicara</h6>
                    </div>
                    <div class="col-lg-4 position-relative mt-n5 mt-md-n4"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                </div>
                <div class="row flex-center">
                    <div class="col-xl-10 px-0">
                        <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                    <?php foreach ($pembicara as $index => $pembicara) {?>
                                        <div class="col-md-4 mb-8 mb-md-0">
                                            <div class="card card-span h-100 shadow-lg">
                                                <div class="card-span-img"><img src="<?= base_url(); ?>/assets/public/assets/img/gallery/user-1.png" alt="" /></div>
                                                <div class="card-body d-flex flex-column flex-center py-6">
                                                    <h4 class="card-text text-center"><?= $pembicara->nama_pembicara?></h4>
                                                    <p class="card-text text-center text-1000 px-4"><?= $pembicara->keterangan?></p>
                                                </div>
                                            </div>
                                    <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-0">
            <div class="container-lg" id="call">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Call of Paper</h6>
                            <p>Call of Paper </p>
                        </div>
                    </div>
                </div>
                
                    <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
              <div class="card">
                
                <div class="card-body">
                  <h4 class="text-center">Book of Abstract <i class="bi bi-book-half"></i> </h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card">
                
                <div class="card-body">
                  <h4 class="text-center">Poster Guideline <i class="bi bi-journal-bookmark"></i></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card">
                
                <div class="card-body">
                  <h4 class="text-center">Presentation Schedule <i class="bi bi-calendar2-day-fill"></i></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card">
               
                <div class="card-body">
                <h4 class="text-center">Program Schedule <i class="bi bi-calendar-month"></i></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card">
                
                <div class="card-body">
                <h4 class="text-center" >Awards <i class="bi bi-award"></i> </h4> 
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="card">
                
                <div class="card-body">
                <h4 class="text-center">Submission System <i class="bi bi-cloud-arrow-up-fill"></i></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
           
        </section>

        <section class="py-3">
            <div class="container-lg" id="template">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Template</h6>
                            <p>Download Format Template </p>
                        </div>
                    </div>
                </div>
                <?php foreach ($template as $index => $templates) {?>
                <div class="row flex-center">
                    <div class="col-xl-10 px-0">
                                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                        <div class="col-md-6 mb-8 mb-md-0">
                                            <div class="card card-span shadow-lg">
                                                <div class="card-body d-flex flex-column flex-center py-6">
                                                    <h4><b>Template Abstrak</b></h4>
                                                    <p class="card-text text-center text-1000"><?= $templates->keterangan?></p>
                                                    <a href="<?=$templates->link?>" class="btn btn-warning">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                         <?php } ?>
                </div>
            </div>
        </section>
       
        <!-- <section class="py-5">
            <div class="bg-holder d-none d-sm-block" style="background-image:url(<?= base_url(); ?>/assets/public/assets/img/illustrations/category-bg.png);background-position:right top;background-size:200px 320px;">
            </div> -->
            <!--/.bg-holder -->

            <!-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6 text-center mb-3">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Browse jobs by category</h5>
                        <p class="mb-5">Choose from the list of most popular categories</p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-10 col-xl-9">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/finance.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Accounting</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/design.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Design/Creative</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/programmer.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Programmer</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/production.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Production</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/education.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Education</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/consultancy.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Consultancy</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        