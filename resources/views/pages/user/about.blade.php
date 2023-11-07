@extends('masteruser.app')
@section('content')

 <!-- start section about -->
 <section class="section_about">
    <!-- <div class="container"> -->
        <div class="section_about_left">
            <h2>Lorem ipsum dolor</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odio ut perferendis repellat cum vel aliquid corrupti nesciunt magni non mollitia, distinctio, libero delectus sit ullam perspiciatis.</p>
         </div>


         <div class="section_about_right">
            <img src="{{asset('assetcss/images/beef-burger-with-potato-pancakes-bacon-isolated_524291-2277.avif')}}" alt="">
         </div>
    <!-- </div> -->
</section>
    <!-- end section about -->


<div class="container-xxl bg-white p-0" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-maincolor fw-normal">Our Services</h5>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-maincolor mb-4"></i>
                            <h5>Book a Table</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-maincolor mb-4"></i>
                            <h5>See Food</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-maincolor mb-4"></i>
                            <h5>Online Order</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-maincolor mb-4"></i>
                            <h5>Accessories</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    <!-- Service End -->
    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3" style="margin-bottom: 50px;">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-maincolor fw-normal">Team Members</h5>
                <h1 class="mb-5">Our Master Chefs</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{asset('assetcss/home/img/team-1.jpg')}}" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, adipisci!</small>
                        <!-- <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{asset('assetcss/home/img/team-2.jpg')}}" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, magnam!</small>
                        <!-- <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{asset('assetcss/home/img/team-3.jpg')}}" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, voluptatem.</small>
                        <!-- <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{asset('assetcss/home/img/team-4.jpg')}}" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, magnam.</small>
                        <!-- <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection