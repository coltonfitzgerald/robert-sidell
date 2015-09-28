jQuery(document).ready(function($) {
    $(".hamburger-menu").click(function() {
    	$(".mobile-wrap").toggle("slow");
    }); 
    $(".mobile-wrap").click(function() {
    	$(".mobile-wrap").hide("slow");
    });
});