function adjustNav(){$(document).width()<breakPoint?($("nav.main-menu").removeClass("full").addClass("compact"),$("nav.main-menu ul").hide()):($("nav.main-menu").removeClass("compact").addClass("full"),$("nav.main-menu ul").show())}var breakPoint=700;$(document).ready(function(){adjustNav(),$(".menu-toggle").click(function(n){$("nav.main-menu ul").slideToggle(),n.preventDefault()})}),$(window).resize(function(){adjustNav()});