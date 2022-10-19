@extends('layouts.app')

@section('content')
<section class="slider_section">
    <div id="project" class="project">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-md-12">
                    <div class="headinga ">
                        <h3>Our Projects</h3>
                    </div>
                    <div class="menu-area">
                        <div class="limit-box">
                            <menu class="main-content">
                                <ul class="menu-content">
                                    <li class="active"> <a href="{{route('pertamina')}}">Pertamina</a> </li>
                                    <li><a href="{{route('shell')}}">Shell</a> </li>
                                    <li><a href="{{route('brand')}}">BP AKR</a></li>
                                    <li><a href="{{route('special')}}">Total</a></li>
                                    <li><a href="{{route('contact')}}">Vivo Energy</a></li>
                                </ul>
                            </menu>
                        </div>
                    </div>
                    <main class="py-4">
                        @yield('content-project')
                    </main>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
