!function(o){"use strict";o(".navbar-nav .nav-link").on("click",function(){o(".navbar-toggler").is(":visible")&&o(".navbar-collapse").collapse("hide")}),o(function(){var s=o(".start-style");o(window).scroll(function(){o(window).scrollTop()>=10?s.removeClass("start-style").addClass("scroll-on"):s.removeClass("scroll-on").addClass("start-style")})}),o(document).ready(function(){o(".hero-anime").removeClass("hero-anime")}),o("body").on("mouseenter mouseleave",".nav-item",function(s){if(o(window).width()>750){var l=o(s.target).closest(".nav-item");l.addClass("show"),setTimeout(function(){l[l.is(":hover")?"addClass":"removeClass"]("show")},1)}});var s=$("#scroll-to-top");$(window).scroll(function(){$(window).scrollTop()>200?(s.addClass("show"),s.fadeIn(100)):(s.removeClass("show"),s.fadeOut(100))}),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>200?$("#scroll-to-top").fadeIn():$("#scroll-to-top").fadeOut()}),$("#scroll-to-top").click(function(){return $("html, body").animate({scrollTop:0},600),!1})})}(jQuery);