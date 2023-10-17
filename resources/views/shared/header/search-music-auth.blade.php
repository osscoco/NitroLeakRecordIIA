<!---Header--->
<div class="ms_header">
    <div class="ms_top_left">
        <div class="ms_top_search">
            <input type="text" class="form-control" placeholder="Search Music Here..">
            <span class="search_icon">
                <img src="{{ asset('images/svg/search.svg') }}" alt="">
            </span>
        </div>
        <div class="ms_top_trend">
            <span><a href="#"  class="ms_color">Tendances :</a></span> <span class="top_marquee"><a href="#">Corti - Soir de lune (Ft. NGGZ) (+8 More)</a></span>
        </div>
    </div>
    <div class="ms_top_right">
        <div class="ms_top_btn">
            <a href="javascript:;" class="ms_admin_name"> <span class="hello-bella-hide">Bonjour {{ $UserName }}</span><span class="ms_pro_name">&nbsp;</span>													
            </a>
            <ul class="pro_dropdown_menu">
                <li><a href="profile.html">Profil</a></li>
                <li><a href="">Paramètres</a></li>
                <li><a href="{{ route('logout') }}">Déconnexion</a></li>
            </ul>
        </div>
    </div>
</div>