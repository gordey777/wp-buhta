$(document).ready(function(){var e=$("a.video-start");e.click(function(){$(".modal-video").slideDown(250)}),$("span.close-nav").click(function(){$(".modal-video").hide()});var e=$("a.video-start");e.click(function(){$(".video-window").show()}),$("span.close-nav").click(function(){$(".video-window").slideUp()}),$("a.close-video2").click(function(){$(".modal-video").slideUp()});var e=$("div.adaptiv-button-wrap");e.click(function(){$(".nav-wrap").slideToggle(300),$("#open").toggleClass("burg-line")}),$(window).resize(function(){$(window).width()>992&&$(".nav-wrap ").removeAttr("style")}),$(".slide-content").slick({dots:!0,infinite:!0,speed:300,fade:!0,autoplay:!0,autoplaySpeed:2500,cssEase:"linear"});var i=$(".bxslider").bxSlider({slideWidth:5e3,minSlides:2,maxSlides:8,moveSlides:1,slideMargin:10,pager:!1,prevText:"",nextText:""});$(".tab_content:first").addClass("current"),$("ul#tabs_list").on("click","li:not(.current)",function(){$(this).addClass("current").siblings().removeClass("current").closest("div.tabs____tabs").find("div.tab_content").removeClass("current").eq($(this).index()).addClass("current")}),$("#tabs_list li").click(function(e){e.preventDefault(),i.reloadSlider()})});
//# sourceMappingURL=maps/common.js.map