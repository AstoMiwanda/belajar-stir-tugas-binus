@extends('template/template')
@section('content')

<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Kemudikan Masa Depan Anda</h1>
                            <h3>Dapatkan keahlian mengemudi yang akan membuka pintu kesempatan dan mobilitas Anda..</h3>
                            <a href="{{url('/offers')}}" class="section-btn btn btn-default">Offer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Pelajari Mengemudi dengan Nyaman</h1>
                            <h3>Pelajaran mengemudi yang fleksibel dan ramah, sesuai dengan kebutuhan dan jadwal Anda..</h3>
                            <a href="{{url('/offers')}}" class="section-btn btn btn-default">Offer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Menguasai Jalan Raya</h1>
                            <h3>Menjadi ahli mengemudi dengan pembelajaran stir mobil yang terbaik.</h3>
                            <a href="{{url('/offers')}}" class="section-btn btn btn-default">Offer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <h2>About us</h2>

                        <br>

                        <p class="lead">Kami adalah perusahaan pembelajaran stir mobil yang berkomitmen memberikan pengalaman belajar mengemudi terbaik. Tim instruktur kami yang berpengalaman menyediakan pelajaran mengemudi konsisten dan fleksibel sesuai kebutuhan Anda. Tersedia paket jasa pembelajaran stir mobil untuk kendaraan matic dan manual dengan fokus pada keamanan dan keterampilan mengemudi yang efektif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Offers <small>Jelajahi berbagai pilihan paket pembelajaran kami yang disesuaikan dengan kebutuhan dan tujuan Anda.</small></h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="fleet.html">Stir Mobil Matic</a></h3>
                            <p class="lead"><small>mulai</small> <strong>500rb</strong> <small>per paket</small></p>
                            <p>Dapatkan pengalaman belajar mengemudi yang nyaman dan mudah dengan paket khusus untuk mobil matic, dilengkapi dengan instruktur berpengalaman dan sesi latihan yang disesuaikan.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="fleet.html">Stir Mobil Manual</a></h3>
                            <p class="lead"><small>mulai</small> <strong>600rb</strong> <small>per paket</small></p>
                            <p>Kuasai seni mengemudi mobil manual dengan bantuan instruktur terampil dan pelajaran yang terstruktur, yang membantu Anda mengembangkan keterampilan mengoperasikan transmisi manual dengan percaya diri.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-4-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="fleet.html">Kombinasi Belajar (Matic dan Manual)</a></h3>
                            <p class="lead"><small>mulai</small> <strong>999rb</strong> <small>per paket</small></p>
                            <p>Nikmati fleksibilitas dan keunggulan ganda dengan paket kombinasi yang memungkinkan Anda mempelajari kedua jenis kendaraan.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Testimonials <small>dengarlah cerita sukses dari para siswa kami</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-client">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Budi</h4>
                                    <span>Shopify Developer</span>
                                </div>
                                <p>Belajar mengemudi di perusahaan ini adalah pengalaman yang luar biasa. Instruktur kami sangat sabar dan memberikan penjelasan yang jelas. Saya merasa mudah memahami teknik-teknik mengemudi dan merasa siap untuk menghadapi tantangan di jalan raya. Terima kasih!</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Sarah</h4>
                                    <span>Marketing Manager</span>
                                </div>
                                <p>Saya sangat senang bisa belajar mengemudi di perusahaan ini. Pelatihnya sangat ramah dan sabar dalam mengajar saya. Dalam waktu singkat, saya merasa nyaman dan percaya diri di jalan raya. Terima kasih banyak!</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Dian</h4>
                                    <span>Art Director</span>
                                </div>
                                <p>Proses belajar mengemudi di perusahaan ini sangat mudah dan menyenangkan. Instruktur yang profesional membantu saya memahami setiap aspek mengemudi. Sekarang saya bisa mengemudi dengan percaya diri dan sukses melewati ujian praktek.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Rizky</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>Saya awalnya sangat khawatir dan gugup tentang belajar mengemudi, tapi semua kekhawatiran itu hilang ketika saya bertemu dengan pelatih yang ramah dan berpengalaman. Mereka memberikan pendekatan yang terarah dan membuat saya merasa nyaman sepanjang proses belajar.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                        <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                        <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Send Message">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
