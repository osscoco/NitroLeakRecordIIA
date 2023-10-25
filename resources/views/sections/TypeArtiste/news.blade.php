<!---Banner--->
<div class="ms-banner" id="page1">
    <div class="container-fluid">
        <div class="row">
            @if(isset($projectRecently))
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
            @else
                <div class="col-lg-12 col-md-12">
                    <div class="ms_banner_img">
                        <img src="{{ asset('images/notFound/not-found.png') }}" width="406" alt="" class="img-fluid" style="margin-top: 15% !important;">
                    </div>
                    <div class="ms_banner_text" style="margin-top: 8% !important;">
                        <h1>À Cet Instant</h1>
                        <h1 class="ms_color">Aucun Projet ...</h1>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>