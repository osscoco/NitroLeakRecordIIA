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

        $(".ms_nav_accueil").on("click", function() {

            $(".ms_nav_item").each(function() {

                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_accueil").addClass("active");

        
        });

        $(".ms_nav_ecoutes_recentes").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_ecoutes_recentes").addClass("active");

        });

        $(".ms_nav_top_15").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_top_15").addClass("active");

        });

        $(".ms_nav_artistes").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_artistes").addClass("active");

        });

        $(".ms_nav_albums").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_albums").addClass("active");

        });

        $(".ms_nav_genres").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_genres").addClass("active");

        });

        $(".ms_nav_nos_services").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_nos_services").addClass("active");

        });

        $(".ms_nav_mes_playlists").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_mes_playlists").addClass("active");

        });

        $(".ms_nav_mes_playlists").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_mes_playlists").addClass("active");

        });

        $(".ms_nav_nouvelle_playlist").on("click", function() {

            $(".ms_nav_item").each(function() {
        
                if ($(this).hasClass("active")) {

                    $(this).removeClass("active");
                }
            });
            
            $(".ms_nav_nouvelle_playlist").addClass("active");

        });
    });

})(jQuery);