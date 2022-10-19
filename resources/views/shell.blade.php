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
                                                <img width="1000" height="559" src="https://usahajb.id/wp-content/uploads/2018/09/tampak-gatot-subroto_2.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://usahajb.id/wp-content/uploads/2018/09/tampak-gatot-subroto_2.jpg 895w, https://usahajb.id/wp-content/uploads/2018/09/tampak-gatot-subroto_2-654x400.jpg 654w, https://usahajb.id/wp-content/uploads/2018/09/tampak-gatot-subroto_2-768x469.jpg 768w, https://usahajb.id/wp-content/uploads/2018/09/tampak-gatot-subroto_2-600x367.jpg 600w" sizes="(max-width: 895px) 100vw, 895px">
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
                                <h4>SPBU Shell – Greater Jakarta</h4>
                                <ul>
                                    <li>MH. Thamrin KM. 6, Cikokol – Tangerang</li>
                                    <li>Raya Daan Mogot 147 – West Jakarta</li>
                                    <li>Pramuka Raya Kav 137-141 – Central Jakarta</li>
                                    <li>Raya Serpong KM. 10, Pondok Jagung, Tangerang – Banten</li>
                                    <li>Raya Pluit Selatan 7 (KIA), North Jakarta</li>
                                    <li>MT. Haryono (Steady Safe), South Jakarta</li>
                                    <li>Boulevard Bintarojaya, Tangerang – Banten</li>
                                    <li>Ciputat Raya Kav 4 – South Jakarta</li>
                                    <li>MH. Thamrin, Lippo Cikarang</li>
                                    <li>Raya Kemang – South Jakarta</li>
                                    <li>Radio Dalam, South Jakarta</li>
                                    <li>Boulevard Citra Raya, Cikupa Tangerang</li>
                                    <li>Puri Kembangan, West Jakarta</li>
                                    <li>Ciater, BSD Tangerang</li>
                                    <li>Hasyim Ashari, Cipondoh Tangerang</li>
                                    <li>Pos Pengumben, South Jakarta</li>
                                    <li>Pajajaran , Bogor</li>
                                    <li>Grand Wisata – Bekasi</li>
                                    <li>Danu Sunter Selatan – North Jakarta</li>
                                </ul>
                            </div>
                        </div>
                        <div id="col-175447468" class="col medium-6 small-12 large-6">
                            <div class="col-inner">
                                <h4>SPBU Shell – Outside Greater Jakarta</h4>
                                <ul>
                                    <li>Raya Serpong Km. 8 Pakulonan, Serpong Banten</li>
                                    <li>Expressway Jagorawi-Jakarta KM 21+400, Bojong Nangka, Kecamatan Gunung Putri, Bogor – West Java</li>
                                    <li>Raya Waru Desa Sawotratap, Sidoardjo – East Jakarta</li>
                                    <li>HR. Muhamad, Surabaya – East Jakarta</li>
                                    <li>DR Djunjunan ( Pasteur ), Bandung</li>
                                    <li>Soekarno Hatta No. 337, Bandung</li>
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
