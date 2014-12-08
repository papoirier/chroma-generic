// FULL SCREEN STUFF --------------------------------
var $ = jQuery;

function fully() {
    var h = $(window).height();
    var w = $(window).width();
    $('.full').css("min-height", h);
    $('.full').css("width", w);
    // menu
    $("header > #nav-container").css("height", (h*0.95));
    // intro
    $("#intro").css("height", h);
    $("#intro > div.container > div.row").css("height", (h*0.95));
}

// ALIGNING STUFF ----------------------------------

function verticalAlign() {
  $('img.logo').each(function() {
    $(this).attr('height', $(this).height());
    // to center the image
    $("img.logo").css("top", (h/2) - ($(this).height()/2));
    $("img.logo").css("left", (w/2) - ($(this).width()/2));
  });
}


// --------------------------------------------------------------------------------
jQuery(document).ready(function($) {

  fully();

  // tooltips
  $('[data-toggle="tooltip"]').tooltip();


  // WOOCOMMERCE STYLING -------------------------------------

  // put in the actual minus symbol
  $("input.minus").replaceWith( "<input type=\"button\" value=\"&minus;\" class=\"minus btn btn-default\">" );

  $("input.input-text").addClass( "form-control" );
  $("input.input-text").attr( "id", "quantity" );

  $("input.plus").addClass( "btn btn-default" );

  $("button.single_add_to_cart_button").addClass("btn btn-default");
  //$("button.single_add_to_cart_button").removeClass( "button alt" );

  $("form.variations_form").addClass( "form-inline" );

  // checkout
  /*
  $("div#customer_details").wrap("<div class=\"row\"></div>");
  $("div.woocommerce-billing-fields").wrap("<div class=\"col-md-6\"></div>");
  $("div.woocommerce-shipping-fields").wrap("<div class=\"col-md-6\"></div>");
  */

  $("#billing_country_chosen").removeAttr("style");
  // $("#billing_country_chosen > a > div").remove();
  // $("#billing_country_chosen").addClass("btn btn-default");
  // $("#billing_country_chosen > a").removeAttr("class");
  // $("#billing_country_chosen > a > span").addClass("country");
  // $("#billing_country_chosen ").append("<span class=\"caret\"></span>");

  //$("li.active-result").addClass("activeeee");




  // when window gets resized -------------------------------
  $(window).resize(function(){
    fully();
    
  });

  $(window).trigger('resize');

  $(window).scroll(function() {
    
  });
  
  // smooth scrolling
  $(function() {
    $('a[href*=#]:not([href=#], a[href=#carousel])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 500);
          return false;
        }
      }
    });
  });


});