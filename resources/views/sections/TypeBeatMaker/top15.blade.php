<!---Weekly Top 15--->
<div class="ms_weekly_wrapper" id="page7">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>top 15 de la semaine</h1>
                </div>
            </div>
            @if (isset($top15Beatmakers_A))
                <div class="col-lg-4 col-md-12 padding_right40">
                    @foreach ($top15Beatmakers_A as $key => $top15Beatmaker_A)
                        <div class="ms_weekly_box">
                            <div class="weekly_left">
                                <span class="w_top_no">
                                    {{ $key + 1 }}
                                </span>
                                <div class="w_top_song">
                                    <div class="w_tp_song_img">
                                    <img src="{{ asset('images/' . $top15Beatmaker_A->imageUrl) }}" width="50" alt="" class="img-fluid">
                                        <div class="ms_song_overlay">
                                        </div>
                                        <div class="ms_play_icon">
                                            <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="w_tp_song_name">
                                        <h3><a href="#">{{ $top15Beatmaker_A->label }}</a></h3>
                                        <p>{{ $top15Beatmaker_A->pack == null ? 'Single' : $top15Beatmaker_A->pack->label }} ({{ $top15Beatmaker_A->beatmaker->label }})</p>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly_right">
                                <span class="w_song_time">{{ $top15Beatmaker_A->duration }}</span>
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
                        @if (!$loop->last)
                            <div class="ms_divider"></div>
                        @endif
                    @endforeach
                </div>
            @endif
            @if (isset($top15Beatmakers_B))
                <div class="col-lg-4 col-md-12 padding_right40">
                    @foreach ($top15Beatmakers_B as $key => $top15Beatmaker_B)
                        <div class="ms_weekly_box"> <!-- class="ms_weekly_box ms_active_play" -->
                            <div class="weekly_left">
                                <span class="w_top_no">
                                    {{ $key + 6 }}
                                </span>
                                <div class="w_top_song">
                                    <div class="w_tp_song_img">
                                        <img src="{{ asset('images/' . $top15Beatmaker_B->imageUrl) }}" width="50" alt="" class="img-fluid">
                                        <div class="ms_song_overlay">
                                        </div>
                                        <div class="ms_play_icon">
                                            <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="w_tp_song_name">
                                        <h3><a href="#">{{ $top15Beatmaker_B->label }}</a></h3>
                                        <p>{{ $top15Beatmaker_B->pack == null ? 'Single' : $top15Beatmaker_B->pack->label }} ({{ $top15Beatmaker_B->beatmaker->label }})</p>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly_right">
                                <span class="w_song_time">{{ $top15Beatmaker_B->duration }}</span>
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
                        @if (!$loop->last)
                            <div class="ms_divider"></div>
                        @endif     
                    @endforeach                   
                </div>
            @endif
            @if (isset($top15Beatmakers_C))
                <div class="col-lg-4 col-md-12 padding_right40">
                    @foreach ($top15Beatmakers_C as $key => $top15Beatmaker_C)
                        <div class="ms_weekly_box"> <!-- class="ms_weekly_box ms_active_play" -->
                            <div class="weekly_left">
                                <span class="w_top_no">
                                    {{ $key + 11 }}
                                </span>
                                <div class="w_top_song">
                                    <div class="w_tp_song_img">
                                        <img src="{{ asset('images/' . $top15Beatmaker_C->imageUrl) }}" width="50" alt="" class="img-fluid">
                                        <div class="ms_song_overlay">
                                        </div>
                                        <div class="ms_play_icon">
                                            <img src="{{ asset('images/svg/play.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="w_tp_song_name">
                                        <h3><a href="#">{{ $top15Beatmaker_C->label }}</a></h3>
                                        <p>{{ $top15Beatmaker_C->pack == null ? 'Single' : $top15Beatmaker_C->pack->label }} ({{ $top15Beatmaker_C->beatmaker->label }})</p>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly_right">
                                <span class="w_song_time">{{ $top15Beatmaker_C->duration }}</span>
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
                        @if (!$loop->last)
                            <div class="ms_divider"></div>
                        @endif     
                    @endforeach                   
                </div>
            @endif
        </div>
    </div>
</div>