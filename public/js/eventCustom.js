(function($) {
    "use strict";

    // Dynamique navigation
    $(document).ready(function() {

        $(function () {
            $('a[href*="#"]:not([href="#"])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 100);
                        return false;
                    }
                }
            });
        });

        //Accueil
        $(".ms_nav_accueil").on("click", function() {

            $(".ms_nav_item").each(function() {

                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_accueil").addClass("active");

        });

        //Services
        $(".ms_nav_services").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_services").addClass("active");

        });

        //Ecoutées
        $(".ms_nav_historique").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_historique").addClass("active");

        });

        ///////////////ARTISTES
        $(".ms_nav_top_15_artistes").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_top_15_artistes").addClass("active");

        });

        $(".ms_nav_artistes").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_artistes").addClass("active");

        });

        $(".ms_nav_albums_artistes").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_albums_artistes").addClass("active");

        });

        ///////////////BEATMAKERS
        $(".ms_nav_top_15_beatmakers").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_top_15_beatmakers").addClass("active");

        });

        $(".ms_nav_beatmakers").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_beatmakers").addClass("active");

        });

        $(".ms_nav_packs_beatmakers").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_packs_beatmakers").addClass("active");

        });

        ///////////////UTILISATEUR AUTHENTIFIE
        $(".ms_nav_mes_playlists").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_mes_playlists").addClass("active");

        });

        $(".ms_nav_new_playlist").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_new_playlist").addClass("active");

        });
    });

})(jQuery);