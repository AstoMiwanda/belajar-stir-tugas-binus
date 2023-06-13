@extends('template/template')
@section('content')

<section>
    <div class="container">
        <div class="text-center">
            <h1>Offers</h1>

            <br>

            <p class="lead">Jelajahi berbagai pilihan paket pembelajaran kami yang disesuaikan dengan kebutuhan dan tujuan Anda.</p>
        </div>
    </div>
</section>

<section class="section-background">
    <div class="container">
        <div class="row">
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

@endsection
