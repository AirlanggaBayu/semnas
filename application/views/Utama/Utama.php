<section class="py-0" id="home">
	<div class="bg-holder d-none d-sm-block">
	</div>
	<!--/.bg-holder-->

	<div class="bg-holder d-sm-none" style="background-image:url(<?= base_url() ?>/assets/public/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
	</div>
	<!--/.bg-holder-->

		<div class="jumbotron">
			<div class="col-md-12 col-lg-12 py-6 text-sm-start text-center">
				<div id="carouselExamplInterval" class="carousel slide" data-bs-ride="carousel">
					<!-- <ul data-target="#myCarousel" data-slide-to="<?= $index; ?>" class="<?= $actives; ?>"> </ul> -->
					<div class="carousel-inner">
						<?php
						foreach ($slider as $index => $keterangana) {
							if ($index == 0) {
						?>
								<div class="carousel-item <?= 'active'; ?>" data-bs-interval="3000">
									
										
									<div class="col-12 text-center"><img src="<?= base_url('img/slider/') . $keterangana->gambar_slider ?>"class="d-block w-100""></div>
										<div class="carousel-caption d-none d-lg-block">
												<center><h1 style="color:black" class="text-center"><?= $keterangana->keterangan; ?></h1></center>
										</div>
									
								</div>
							<?php } else { ?>
								<div class="carousel-item" data-bs-interval="3000">
									
										
											<div class="col-12 text-center"><img src="<?= base_url('img/slider/') . $keterangana->gambar_slider ?>"class="d-block w-100""></div>
											<div class="carousel-caption d-none d-lg-block">
												<center><h1 style="color:black" class="text-center"><?= $keterangana->keterangan; ?></h1></center>
											</div>
									
								</div>

								
						<?php  }
						}
						?>
					</div>
				</div>
			</div>
		</div>
	
			<!-- <div class="col-md-6 col-lg-6 py-6 text-sm-start text-center">
				<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

					<ul data-target="#myCarousel" data-slide-to="<?= $index; ?>" class="<?= $actives; ?>"> </ul>
					<div class="carousel-inner">
						<?php
						foreach ($slider as $index => $gambar) {
							$actives = '';
							if ($index == 0) {
								$actives = 'active';
							}
						?>
							<div class="carousel-item <?= $actives; ?>" data-bs-interval="1000">
								<img src="<?= base_url('img/slider/') . $gambar->gambar_slider ?>" width="300">
							</div>
						<?php	} ?>
					</div>
				</div>
			</div> -->
		</div>
	

	<!-- ok -->

	
		<section class="py-0">
			<div class="bg-holder" style="background-image:url(<?= base_url(); ?>/assets/public/assets/img/illustrations/bg.png);background-position:left top;background-size:initial;margin-top:-180px;">
			</div>
			<!--/.bg-holder-->

			<div class="container" id="tentang" data-aos="fade-left" data-aos-duration="1000">
				<div class="row flex-center">
					<div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="<?= base_url(); ?>/assets/public/assets/img/illustrations/passion.png" width="450" alt="" /></div>
					<div class="col-md-5 text-center text-md-start">
						<h6 class="fw-bold fs-2 fs-lg-3 display-3 lh-sm">About Conference</h6>
						<p class="my-4 pe-xl-8"><?php echo $profil['keterangan']; ?></p>
					</div>
				</div>
			</div>
		</section>


		<!-- ============================================-->
		<!-- <section> begin ============================-->
		<section class="py-0">
			<div class="container" id="jadwal" data-aos="fade-right" data-aos-duration="1000">
				<div class="row align-items-center">
					<div class="col-12 text-center">
						<h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Schedule</h6>
						<p>Important Dates</p>
					</div>
				</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Date</td>
							<td>Schedule</td>
						<tr>
							<?php foreach ($jadwal as $index => $jadwals) { ?>
								<td><?= $jadwals->tanggal ?></td>
								<td><?= $jadwals->deskripsi ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- end of .container-->
		</section>
		<!-- <section> close ============================-->
		<!-- ============================================-->

		<section class="py-0">
			<div class="container" id="pembicara">
				<div class="row text-center">
					<h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Speaker</h6>
				</div>
				<!-- ini gambar -->
				<div class="row text-center ">
					<?php foreach ($pembicara as $index => $pembicara) { ?>
						<div class="col-md-4 mb-3">
							<div class="card">
								<div class="card-span-img " data-aos="flip-left" data-aos-duration="1000"><img src="<?= base_url('img/pembicara/') . $pembicara->gambar_pembicara ?>" style="max-width: 300px;max-height:300px">
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
								<h4 class="text-center">Publication Fee<i class="bi bi-journal-bookmark"></i></h4>
								<p class="card-text">The publication fee is free for early-bird submission. It's charged 75.000 IDR for regular submission</p>
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
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<!-- <div class="col-md-4 mb-5">
								<div class="card">
									<div class="card-body">
										<h4 class="text-center">Abstract Templete</h4>
										<div class="d-grid gap-2">
											<p class="card-text text-center text-1000">Download Templete Abstract</p>
											<a href="" class="btn btn-success"><i class="bi bi-arrow-down-circle"></i> Download</a>
										</div>
									</div>
								</div> -->
					<div class="col-md-4 mb-5">
						<div class="card">
							<div class="card-body">
								<h4 class="text-center">Full Paper Templete</h4>
								<div class="d-grid gap-2">
									<p class="card-text text-center text-1000">Download here</p>
									<a href="" class="btn btn-success"><i class="bi bi-arrow-down-circle"></i> Download</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>


		<section class="py-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 text-center">
						<h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Sponsor</h6>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<?php foreach ($sponsor as $sponsors) { ?>
					<div class="col-md-4 mb-5 col-lg-4">
						<div class="card">
							<div class="card-body">
								<center>
									<img src="<?= base_url('img/sponsor/') . $sponsors->gambar ?>" class="card-img" alt="..." style="max-width: 120;">
								</center>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</section>
</section>
	


		<!-- dfc -->

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