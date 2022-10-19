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
                                    <li><a href="{{route('bpakr')}}">BP AKR</a></li>
                                    <li><a href="{{route('total')}}">Total</a></li>
                                    <li><a href="{{route('vivo')}}">Vivo Energy</a></li>
                                </ul>
                            </menu>
                        </div>
                    </div>
                    @section('content-project')
                    <div class="tab-panels">
                        <div class="panel entry-content" id="tab_shell">
                            <div class="row row-collapse row-full-width" id="row-831838631">
                                <div id="col-1584344395" class="col hide-for-small small-12 large-12">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_469997124">
                                            <div class="img-inner image-cover dark">
                                                <img width="1000" height="559" src="https://usahajb.id/wp-content/uploads/2020/11/total.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://usahajb.id/wp-content/uploads/2020/11/total.jpg 895w, https://usahajb.id/wp-content/uploads/2020/11/total.jpg 654w, https://usahajb.id/wp-content/uploads/2020/11/total.jpg 768w, https://usahajb.id/wp-content/uploads/2020/11/total.jpg 600w" sizes="(max-width: 895px) 100vw, 895px">
                                            </div>
                                            <style>
                                                #image_469997124 {
                                                width: 100%;
                                                }
                                                @media (min-width:550px) {
                                                #image_469997124 {
                                                    width: 100%;
                                                }
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="gap-1829485938" class="gap-element clearfix" style="display:block; height:auto;">

                                <style>
                                    #gap-1829485938 {
                                    padding-top: 5%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div class="row row-collapse-project" id="row-2063184584">
                        <div id="col-298741496" class="col medium-6 small-12 large-6">
                            <div class="col-inner">
                                <ul>
                                    <li>Jalan Pahlawan Seribu, Serpong </li>
                                    <li>Jalan Boulevard Raya Sektor 7 Bintaro
                                    </li>
                                    <li>Jalan Terogong Raya, Cilandak</li>
                                    <li>Jalan Cideng Timur</li>
                                    <li>Jalan Mabes Hankam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endsection
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
