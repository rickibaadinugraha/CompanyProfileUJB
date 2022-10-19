@extends('layouts.app')
@section('title', 'Usaha Jayamas Bhakti')
@section('content')

<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/bgshell.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Building Gas Stations</span>
                        <h1>for All Players
                            in Fuel Retail
                            Business in
                            Indonesia</h1>
                        <p>Since 1978 we’ve completed project after project on time, within budget, and with only the
                            <br>highest standards for quality.</p>
                        <a class="buynow" href="#">Browse Project</a>
                        <ul class="social_icon">
                            <li> <a href="https://www.facebook.com/ricki.nugraha.313/"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="https://www.instagram.com/rickek_/?hl=id"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                            <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li> <a href="https://www.facebook.com/ricki.nugraha.313/"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="https://www.instagram.com/rickek_/?hl=id"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                            <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</section>

<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                <div class="about_img">
                    <figure><img src="images/sinergi.png" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                <div class="about_box">
                    <h3>About Us</h3>
                    <span>Usaha Jayamas Bhakti</span>
                    <p>PT. Usaha Jayamas Bhakti also known as UJB was established in the year of 1978 as a Contractor & General Supplier Company. Today UJB as a Member a P.E.I. (Petroleum Equipment Institute) specialized in the distribution and contractor of Service Station, Oil & Industrial Equipments etc. As the company itself is committed to providing good quality products, our staffs are committed to providing better services to meet the requirements of our customers et all times.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->

<!-- brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Brand</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach($single as $single)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                    <img src="images/1.png" alt="img" />
                        <h3><strong class="red">{{ $single->price }}</strong></h3>
                        <span>{{ $single->name }}</span>
                        <i><img src="images/star.png" /></i>
                        <i><img src="images/star.png" /></i>
                        <i><img src="images/star.png" /></i>
                        <i><img src="images/star.png" /></i></br>
                        <div class="col-md-12">
                            <a class="read-more" href="/individual/{{$single->id}}">View details</a>

                            <a class="read-more" href="{{url('/cart/add/')}}/{{$single->id}}">Add to cart</a>

                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12">
                    <a class="read-more">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end brand -->
<!-- clients -->
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>what say our clients</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Usaha Jayamas Bhakti<br><strong class="ornage_color">Testi</strong></h3>
                                <p>jayamas bhakti business is a construction company with a lot of experience so that I as a customer here feel satisfied with what pt is doing, so I am very proud to have worked with this company for some of our gas station building works. Thank you</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end clients -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contact us</h2>
                </div>
                <form class="main_form">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class=" col-md-12">
                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message"></textarea>
                        </div>
                        <div class=" col-md-12">
                            <button class="send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->


@endsection
