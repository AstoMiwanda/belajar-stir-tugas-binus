@extends('template/template')
@section('content')

<section>
    <div class="container">
        <div class="text-center">
            <h1>Contact Us</h1>

            <br>

            <p class="lead">Tim layanan pelanggan kami siap membantu Anda dengan segala pertanyaan atau permintaan yang Anda miliki.</p>
        </div>
    </div>
</section>


<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
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
                    <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
