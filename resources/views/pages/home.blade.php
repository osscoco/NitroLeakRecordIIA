@extends('layout')

@section('title', 'Accueil')

@section('content')

<!---Banner--->
<div class="ms-banner" id="accueil">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ms_banner_img">
                    <img src="{{ asset('images/Ce Mois-ci/nitro-corti.png') }}" width="406" alt="" class="img-fluid">
                </div>
                <div class="ms_banner_text">
                    <h1>Ce mois-ci</h1>
                    <h1 class="ms_color">Nouveaux Projets !</h1>
                    <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ea incidunt velit nihil ab consectetur modi tenetur quos ad, rerum aliquam quasi dolorum, sunt commodi facilis at doloribus totam? Delectus!<br> Things, The Heartbeat Stops, Walking Promises, Desired Games and many more...</p>
                    <div class="ms_banner_btn">
                        <a href="#" class="ms_btn">Ecouter</a>
                        <a href="#" class="ms_btn">File d'attente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (Session::get('UserSession') == true)

<!---Recently Played Music--->
<div class="ms_rcnt_slider" id="ecoutes_recentes">
    <div class="ms_heading">
        <h1>Récemment Ecouté</h1>
        <span class="veiw_all"><a href="#">voir plus</a></span>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Intro</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Cogite</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Fly</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Nitro</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Nitra</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Rêve</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Peace</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">La Piste</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Ma Ville</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Ecoutes Recentes/corti-nitro.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Transfert d'Ame</a></h3>
                        <p>Nitro (Corti)</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next slider_nav_next"></div>
    <div class="swiper-button-prev slider_nav_prev"></div>
</div>

@endif

<!---Weekly Top 15--->
<div class="ms_weekly_wrapper" id="top_15_semaine">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>top 15 de la semaine</h1>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 padding_right40">
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            01
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                            <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Intro</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">2:20</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            02
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                            <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Cogite</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">3:09</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            03
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                            <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Fly</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">3:22</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            04
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Nitro</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">2:56</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            05
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Nitra</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">3:20</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 padding_right40">
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            06
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Rêve</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">3:19</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            07
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Peace</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">4:52</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box ms_active_play">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            08
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <div class="ms_bars">
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">La Piste</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">2:46</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            09
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Ma Ville</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">2:27</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            10
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/1-10-corti-nitro.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Transfert d'âme</a></h3>
                                <p>Nitro (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">4:54</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            11
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/11-corti-nggz-soir-de-lune.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Soir de lune</a></h3>
                                <p>Single (Corti Ft. NGGZ)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">3:21</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            12
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/12-corti-preambule.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Préambule</a></h3>
                                <p>Single (Corti)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">2:04</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            13
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{ asset('images/Top 15 Semaine/13-corti-nggz-loin.png') }}" width="50" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Loin</a></h3>
                                <p>Single (Corti Ft. NGGZ)</p>
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">3:28</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{ asset('images/svg/more.svg') }}" alt="">									
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Featured Artists Music--->
<div class="ms_featured_slider" id="artistes">
    <div class="ms_heading">
        <h1>Artistes</h1>
        <span class="veiw_all"><a href="#">voir plus</a></span>
    </div>
    <div class="ms_feature_slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Artistes/corti.png') }}" width="252" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Corti</a></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Artistes/kalu.png') }}" width="252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Kalu</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next1 slider_nav_next"></div>
    <div class="swiper-button-prev1 slider_nav_prev"></div>
</div>
<!----Add Section Start---->
<div class="ms_advr_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#"><img src="{{ asset('images/Artistes/nitro-leak-record.png') }}" width="728" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
<!----Featured Albumn Section Start---->
<div class="ms_fea_album_slider" id="albums">
    <div class="ms_heading">
        <h1>Albums</h1>
        <span class="veiw_all"><a href="#">view more</a></span>
    </div>
    <div class="ms_album_slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Albums/corti-nitro.png') }}" width="252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Favory</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>File d'Attente</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Télécharger</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Partager</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Nitro</a></h3>
                        <p>Corti</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{ asset('images/Albums/kalu-charbon.png') }}" width="252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Charbon</a></h3>
                        <p>Kalu</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Dark matters</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Eye to eye</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Cloud nine</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Cobweb of lies</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Bloodlust</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Time flies</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Dark matters</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="https://dummyimage.com/252x252" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{ asset('images/svg/more.svg') }}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">Eye to eye</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next3 slider_nav_next"></div>
    <div class="swiper-button-prev3 slider_nav_prev"></div>
</div>
<!----Top Genres Section Start---->
<div class="ms_genres_wrapper" id="genres">
    <div class="row">
        <div class="col-lg-12">
            <div class="ms_heading">
                <h1>Genres</h1>
                <span class="veiw_all"><a href="#">view more</a></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ms_genres_box">
                <img src="{{ asset('images/Genres/rap.png') }}" width="523" alt="" class="img-fluid">
                <div class="ms_main_overlay">
                    <div class="ms_box_overlay"></div>
                    <div class="ms_play_icon">
                        <img src="{{ asset('images/svg/play.svg') }}" alt="">
                    </div>
                    <div class="ovrly_text_div">
                        <span class="ovrly_text1"><a href="#">rap</a></span>
                        <span class="ovrly_text2"><a href="#">view song</a></span>
                    </div>
                </div>
                <div class="ms_box_overlay_on">
                    <div class="ovrly_text_div">
                        <span class="ovrly_text1"><a href="#">rap</a></span>
                        <span class="ovrly_text2"><a href="#">view song</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ms_genres_box">
                        <img src="https://dummyimage.com/246x246" alt="" class="img-fluid" />
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">Classical</a></span>
                            </div>
                        </div>
                        <div class="ms_box_overlay_on">
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">Classical</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ms_genres_box">
                        <img src="https://dummyimage.com/523x246" alt="" class="img-fluid" />
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">hip hop</a></span>
                            </div>
                        </div>
                        <div class="ms_box_overlay_on">
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">hip hop</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ms_genres_box">
                        <img src="https://dummyimage.com/523x246" alt="" class="img-fluid" />
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">dancing</a></span>
                            </div>
                        </div>
                        <div class="ms_box_overlay_on">
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">dancing</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ms_genres_box">
                        <img src="https://dummyimage.com/246x246" alt="" class="img-fluid" />
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_play_icon">
                                <img src="{{ asset('images/svg/play.svg') }}" alt="">
                            </div>
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">EDM</a></span>
                            </div>
                        </div>
                        <div class="ms_box_overlay_on">
                            <div class="ovrly_text_div">
                                <span class="ovrly_text1"><a href="#">EDM</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="ms_genres_box">
                <img src="https://dummyimage.com/246x523" alt="" class="img-fluid" />
                <div class="ms_main_overlay">
                    <div class="ms_box_overlay"></div>
                    <div class="ms_play_icon">
                        <img src="{{ asset('images/svg/play.svg') }}" alt="">
                    </div>
                    <div class="ovrly_text_div">
                        <span class="ovrly_text1"><a href="#">rock</a></span>
                    </div>
                </div>
                <div class="ms_box_overlay_on">
                    <div class="ovrly_text_div">
                        <span class="ovrly_text1"><a href="#">rock</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Add Section Start---->
<div class="ms_advr_wrapper ms_advr2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#"><img src="{{ asset('images/Artistes/nitro-leak-record.png') }}" width="728" class="img-fluid"/></a>
            </div>
        </div>
    </div>
</div>
<!----Main div close---->
@endsection