$(document).ready(function(){function r(){n=$(window).scrollTop(),t.css({"margin-top":-(n/3)+"px",opacity:1-n/350})}$("body").addClass("js");var e=$(".hero"),t=$(".hero-title"),n;$(window).scroll(function(){r()});var i=$("#menu"),s=$("#menu > ul > li.has-dd");$(s).hover(function(){$(this).addClass("is-active"),$(this).find("ul.sub-dd").removeClass("is-hidden").addClass("is-active")},function(){$(this).removeClass("is-active"),$(this).find("ul.sub-dd").removeClass("is-active").addClass("is-hidden")});var o=$("#menu"),u=$(".menu-link"),a=$("#wrap"),f=$(".has-dd");u.click(function(){return u.toggleClass("active"),a.toggleClass("active"),!1})});