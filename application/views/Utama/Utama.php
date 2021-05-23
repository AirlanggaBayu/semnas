<section class="py-0" id="home">
    <div class="bg-holder d-none d-sm-block">
    </div>
    <!--/.bg-holder-->

    <div class="bg-holder d-sm-none" style="background-image:url(<?= base_url() ?>/assets/public/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
             <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="mt-6 mb-sm-4 display-2 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-8">Seminar Nasional 2021 <br class="d-block d-lg-none d-xl-block" />Politeknik Negeri Jember</h1>
                        </div>

                        <div class="carousel-item">
                            <h1 class="mt-6 mb-sm-4 display-2 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-8">Menuju Tak Terbatas <br class="d-block d-lg-none d-xl-block" />Dan Melampauinya</h1>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url() ?>/assets/public/assets/img/logo-polije.png" width="300" alt="" data-aos="fade-down" data-aos-duration="500" srcset="" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url(); ?>/assets/public/assets/img/illustrations/passion.png" width="300" alt=""  data-aos="fade-down" data-aos-duration="500" srcset="" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url() ?>/assets/public/assets/img/logo-polije.png" width="300" alt="" data-aos="fade-down" data-aos-duration="500" srcset="" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
<section class="py-5">
    <div class="bg-holder" style="background-image:url(<?= base_url(); ?>/assets/public/assets/img/illustrations/bg.png);background-position:left top;background-size:initial;margin-top:-180px;">
    </div>
    <!--/.bg-holder-->

    <div class="container" id="tentang" data-aos="fade-left" data-aos-duration="1000">
        <div class="row flex-center">
            <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="<?= base_url(); ?>/assets/public/assets/img/illustrations/passion.png" width="450" alt="" /></div>
            <div class="col-md-5 text-center text-md-start">
                <h6 class="fw-bold fs-2 fs-lg-3 display-3 lh-sm">Tentang Seminar</h6>
                <p class="my-4 pe-xl-8"><?php echo $profil['keterangan']; ?></p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0">

    <div class="container" id="jadwal" data-aos="fade-right" data-aos-duration="1000">
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Jadwal</h6>
                    <p>Jadwal Kegiatan</p>
                </div>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Tanggal</td>
                        <td>Jadwal</td>
                    <tr>
                        <?php foreach ($jadwal as $index => $jadwals) { ?>
                            <td><?= $jadwals->tanggal ?></td>
                            <td><?= $jadwals->deskripsi ?></td>
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
<div class="container" id="pembicara">
    <div class="row text-center">
        <h1>Pembicara</h1>
    </div>
    <div class="row text-center ">
        <?php foreach ($pembicara as $index => $pembicara) { ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-span-img " data-aos="flip-left" data-aos-duration="1000"><img src="<?= base_url(); ?>/assets/public/assets/img/gallery/user-1.png">
                        <div class="card-body">
                            <h3 class="card-text text-center"><?= $pembicara->nama_pembicara ?></h3>
                            <p class="card-text text-center"><?= $pembicara->keterangan ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



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
                <div class="card" data-aos="flip-left" data-aos-duration="500">

                    <div class="card-body">
                        <h4 class="text-center">Book of Abstract <i class="bi bi-book-half"></i> </h4>
                        <p class="card-text">The Book of Abstract will be sent to all the author email.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="200">

                    <div class="card-body">
                        <h4 class="text-center">Poster Guideline <i class="bi bi-journal-bookmark"></i></h4>
                        <p class="card-text">The Poster Guideline can be downloaded here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">

                    <div class="card-body">
                        <h4 class="text-center">Presentation Schedule <i class="bi bi-calendar2-day-fill"></i></h4>
                        <p class="card-text">The Presentation Schedule will be informed 3 weeks before the conference date.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="card">

                    <div class="card-body">
                        <h4 class="text-center">Program Schedule <i class="bi bi-calendar-month"></i></h4>
                        <p class="card-text">The Program Schedule will be informed 2 weeks before the conference date.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                <div class="card">

                    <div class="card-body">
                        <h4 class="text-center">Awards <i class="bi bi-award"></i> </h4>
                        <p class="card-text">The Best Presenter and Article will awarded soon after the conference.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">

                    <div class="card-body">
                        <h4 class="text-center">Submission System <i class="bi bi-cloud-arrow-up-fill"></i></h4>
                        <p class="card-text">This conference's submission system is using EasyChair.</p>
                    </div>
                </div>
            </div>

</section>

<section class="py-0">
    <div class="container-lg" id="template">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Download Templete</h6>
                    <p>Download Templete di sini </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
                <div class="card">

                    <div class="card-body">
                        <h4 class="text-center">Unduh Templete Abstrak</h4>
                        <div class="d-grid gap-2">
                            <p class="card-text text-center text-1000">Unduh Template Abstrak</p>
                            <a href="" class="btn btn-success"><i class="bi bi-arrow-down-circle"></i> Download</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">

                    <div class="card-body">
                        <h4 class="text-center">Unduh Templete Artikel</h4>
                        <div class="d-grid gap-2">
                            <p class="card-text text-center text-1000">Unduh Template Artikel</p>
                            <a href="" class="btn btn-warning"><i class="bi bi-arrow-up-circle"></i> Download</a>
                        </div>
                    </div>
                </div>
            </div>
</section>



<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Sponsor</h6>
            </div>
        </div>
    </div>
    <div class="container">
        <?php foreach ($sponsor as $sponsors) { ?>
            <div class="col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <center><img src="<?= base_url('img/sponsor/') . $sponsors->gambar ?>" class="card-img" alt="..." style="max-width: 120;"></center>
                    </div>
                </div>
            </div>
        <?php } ?>
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