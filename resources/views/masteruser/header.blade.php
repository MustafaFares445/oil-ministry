
<div class="container-xxl bg-white p-0">
  <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-maincolor" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

 <!-- Navbar & Hero Start -->
 <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-maincolor m-0"><i class="fa fa-utensils me-3"></i>Resto</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{route('homee')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('mainmenu')}}" class="nav-item nav-link">Menu</a>

                <a href="{{route('reservations.index')}}" class="nav-item nav-link">Reservation</a>

                <a href="{{route('recipes')}}" class="nav-item nav-link">Recipe</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

                <div href="" class="nav_icon" style="
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 20px;
                margin-right: -40px;
            ">
                    <a href="{{ route('login') }}"><i class="fa fa-user nav_icon_user" style="margin-right: 15px;color: var(--main-color);"></i></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')" style="font-size: 20px; margin-right:15px; color:red;"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">

                            {{ __('') }}
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </form>
                    <a href="{{route('cart.show')}}">
                        <i class="fa fa-shopping-cart nav_icon_cart" style="
                        color: var(--main-color);
                        cursor: pointer;
                    ">&nbsp;&nbsp;</i>
                    {{-- <a href="{{route('cart.cartItemCount')}}">{{$itemCount}}</a> --}}
                    </a>


                  </div>
            </div>

        </div>
    </nav>

    {{-- <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a href="" class="btn btn-maincolor py-sm-3 px-sm-5 me-3 animated slideInLeft">Order Now</a>
                    <a href="" class="btn btn-maincolor py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{asset('home/img/hero.png')}}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Navbar & Hero End -->

</div>
