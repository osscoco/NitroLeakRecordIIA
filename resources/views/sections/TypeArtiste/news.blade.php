<!---Banner--->
<div class="ms-banner" id="page1">
    <div class="container-fluid">
        @if(isset($projectRecently))
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="ms_banner_img">
                        <img src="{{ asset('images/' . $projectRecently->imageUrl) }}" width="406" alt="" class="img-fluid" style="margin-top: 15% !important;">
                    </div>
                    <div class="ms_banner_text">
                        <h1>Voici un</h1>
                        <h1 class="ms_color">Nouveau Projet !</h1>
                        <p>
                            <span style="color: white;">{{ $projectRecently->artist->label }} </span>
                            vient de sortir son nouveau projet intitulé
                            <span style="color: white;"> {{ $projectRecently->label }} </span>
                            , sortie le 
                            <span style="color: white;"> {{ $dateProjectRecently }}. </span> <br>
                            Venez découvrir ce nouveau projet musical !<br> 
                            N'hésitez pas à le suivre et à lui faire des dons si vous aimez son univers !
                        </p>
                        <div class="ms_banner_btn">
                            <a href="#" class="ms_btn">Ecouter</a>
                            <a href="#" class="ms_btn">File d'attente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ms_releases_wrapper">
                    <div class="ms_heading">
                        <h1>Nouveautés</h1>
                        <span class="veiw_all"><a class="viewMoreNew" style="cursor: pointer;">Voir Plus</a></span>
                    </div>
                    <div class="ms_release_slider swiper-container">
                        <div class="ms_divider"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="ms_release_box">
                                    <div class="w_top_song">
                                        <span class="slider_dot"></span>
                                        <div class="w_tp_song_img">
                                            <img src="https://dummyimage.com/50x50" alt="">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <div class="ms_play_icon">
                                                <img src="assets/images/svg/play.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                                            <p>Ava Cornish</p>
                                        </div>
                                    </div>
                                    <div class="weekly_right">
                                        <span class="w_song_time">5:10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ms_release_box">
                                    <div class="w_top_song">
                                        <span class="slider_dot"></span>
                                        <div class="w_tp_song_img">
                                            <img src="https://dummyimage.com/50x50" alt="">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <div class="ms_play_icon">
                                                <img src="assets/images/svg/play.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                                            <p>Ava Cornish</p>
                                        </div>
                                    </div>
                                    <div class="weekly_right">
                                        <span class="w_song_time">5:10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ms_release_box">
                                    <div class="w_top_song">
                                        <span class="slider_dot"></span>
                                        <div class="w_tp_song_img">
                                            <img src="https://dummyimage.com/50x50" alt="">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <div class="ms_play_icon">
                                                <img src="assets/images/svg/play.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                                            <p>Ava Cornish</p>
                                        </div>
                                    </div>
                                    <div class="weekly_right">
                                        <span class="w_song_time">5:10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ms_release_box">
                                    <div class="w_top_song">
                                        <span class="slider_dot"></span>
                                        <div class="w_tp_song_img">
                                            <img src="https://dummyimage.com/50x50" alt="">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <div class="ms_play_icon">
                                                <img src="assets/images/svg/play.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                                            <p>Ava Cornish</p>
                                        </div>
                                    </div>
                                    <div class="weekly_right">
                                        <span class="w_song_time">5:10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ms_release_box">
                                    <div class="w_top_song">
                                        <span class="slider_dot"></span>
                                        <div class="w_tp_song_img">
                                            <img src="https://dummyimage.com/50x50" alt="">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <div class="ms_play_icon">
                                                <img src="assets/images/svg/play.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                                            <p>Ava Cornish</p>
                                        </div>
                                    </div>
                                    <div class="weekly_right">
                                        <span class="w_song_time">5:10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    {{-- <div class="swiper-button-next2 slider_nav_next"></div>
                    <div class="swiper-button-prev2 slider_nav_prev"></div> --}}
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="ms_banner_img">
                        <img src="{{ asset('images/notFound/not-found.png') }}" width="406" alt="" class="img-fluid" style="margin-top: 15% !important;">
                    </div>
                    <div class="ms_banner_text" style="margin-top: 8% !important;">
                        <h1>À Cet Instant</h1>
                        <h1 class="ms_color">Aucun Projet ...</h1>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>