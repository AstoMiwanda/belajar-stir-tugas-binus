<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{url('/')}}" class="navbar-brand">Belajar Stir</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="{{$data['menu'] == 'home' ? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li>
                <li class="{{$data['menu'] == 'offers' ? 'active' : ''}}"><a href="{{url('/offers')}}">Offers</a></li>
                <li class="{{$data['menu'] == 'schedule' ? 'active' : ''}}"><a href="{{url('/schedule')}}">Schedule</a></li>
                <li class="{{$data['menu'] == 'team' ? 'active' : ''}}"><a href="{{url('/team')}}">Team</a></li>
                <li class="{{$data['menu'] == 'contact' ? 'active' : ''}}"><a href="{{url('/contact')}}">Contact Us</a></li>
            </ul>
        </div>

    </div>
</section>
