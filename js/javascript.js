(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('#sidebar-wrapper .js-scroll-trigger').click(function () {
        $("#sidebar-wrapper").removeClass("active");
        $(".menu-toggle").removeClass("active");
        $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    });

    // Scroll to top button appear
    $(document).scroll(function () {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });


    var randNum = Math.floor(Math.random() * 5 + 1);
    var newText = "";

    if (document.documentElement.lang === "en") {
        if (randNum == 1) {
            newText = "Make internet great again!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 2) {
            newText = "Websites for everyone!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 3) {
            newText = "Create the web!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 4) {
            newText = "The web is your sandbox!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 5) {
            newText = "Websites. Done right.";
            document.getElementById("h1").innerHTML = newText;
        }
    }
    
        if (document.documentElement.lang === "no") {
        if (randNum == 1) {
            newText = "Gjør internett flott igjen!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 2) {
            newText = "Nettsteder for alle!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 3) {
            newText = "Opprett nettsted!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 4) {
            newText = "Internett er din sandkasse!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 5) {
            newText = "Nettsteder. Gjørt rett.";
            document.getElementById("h1").innerHTML = newText;
        }
    }
    
        if (document.documentElement.lang === "ru") {
        if (randNum == 1) {
            newText = "Сделайте Интернет великолепным!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 2) {
            newText = "Веб-сайты для всех!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 3) {
            newText = "Создать веб-сайт!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 4) {
            newText = "Интернет - это ваша песочница!";
            document.getElementById("h1").innerHTML = newText;
        }

        if (randNum == 5) {
            newText = "Веб-сайты. Сделаны правильно.";
            document.getElementById("h1").innerHTML = newText;
        }
    }

})(jQuery); // End of use strict

// Disable Google Maps scrolling
// See http://stackoverflow.com/a/25904582/1607849
// Disable scroll zooming and bind back the click event
var onMapMouseleaveHandler = function (event) {
    var that = $(this);
    that.on('click', onMapClickHandler);
    that.off('mouseleave', onMapMouseleaveHandler);
    that.find('iframe').css("pointer-events", "none");
}
var onMapClickHandler = function (event) {
    var that = $(this);
    // Disable the click handler until the user leaves the map area
    that.off('click', onMapClickHandler);
    // Enable scrolling zoom
    that.find('iframe').css("pointer-events", "auto");
    // Handle the mouse leave event
    that.on('mouseleave', onMapMouseleaveHandler);
}
// Enable map zooming with mouse scroll when the user clicks the map
$('.map').on('click', onMapClickHandler);

//Cookie message
window.addEventListener("load", function () {
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#252e39"
            },
            "button": {
                "background": "#14a7d0"
            }
        },
        "theme": "edgeless"
    })
});

