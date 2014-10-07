// FULL SCREEN STUFF --------------------------------
var $j = jQuery;

function fully() {
    var h = $j(window).height();
    var w = $j(window).width();
    $j('.full').css("min-height", h);
    $j('.full').css("width", w);
    // menu
    $j("header > #nav-container").css("height", (h*0.95));
    // intro
    $j("#intro").css("height", h);
    $j("#intro > div.container > div.row").css("height", (h*0.95));
}

// ALIGNING STUFF ----------------------------------

function verticalAlign() {
  $j('img.logo').each(function() {
    $j(this).attr('height', $j(this).height());
    // to center the image
    $j("img.logo").css("top", (h/2) - ($j(this).height()/2));
    $j("img.logo").css("left", (w/2) - ($j(this).width()/2));
  });
}


// --------------------------------------------------------------------------------
$j(document).ready(function() {
  //fully();

  // WOOCOMMERCE STYLING -------------------------------------

  // put in the actual minus symbol
  $j("input.minus").replaceWith( "<input type=\"button\" value=\"&minus;\" class=\"minus btn btn-default\">" );

  $j("input.input-text").addClass( "form-control" );
  $j("input.input-text").attr( "id", "quantity" );

  $j("input.plus").addClass( "btn btn-default" );

  $j("button.single_add_to_cart_button").addClass("btn btn-default");
  //$j("button.single_add_to_cart_button").removeClass( "button alt" );

  $j("form.variations_form").addClass( "form-inline" );

  // checkout
  //$j("div.woocommerce-billing-fields").
  $j("#billing_country_field").wrap("<div class=\"row\"><div class=\"col-md-6\"></div></div>");

  $j("#billing_country_chosen").removeAttr("style");
  $j("#billing_country_chosen > a > div").remove();
  $j("#billing_country_chosen").addClass("btn btn-default");
  $j("#billing_country_chosen > a").removeAttr("class");
  $j("#billing_country_chosen > a > span").addClass("country");
  $j("#billing_country_chosen ").append("<span class=\"caret\"></span>");




  // when window gets resized -------------------------------
  $j(window).resize(function(){
    
  });

  $j(window).trigger('resize');

  $j(window).scroll(function() {
    
  });
  
  // smooth scrolling
  $j(function() {
    $j('a[href*=#]:not([href=#], a[href=#carousel])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $j(this.hash);
        target = target.length ? target : $j('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $j('html,body').animate({
            scrollTop: target.offset().top
          }, 500);
          return false;
        }
      }
    });
  });


});