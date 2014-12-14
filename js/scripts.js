function fullIntro() {
  var h = jQuery(window).height();
  var w = jQuery(window).width();
  jQuery('.full').css("min-height", (h*0.95));
}

jQuery(document).ready(function($) {

  fullIntro();

  // tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // single product > style the dropdowns
  $('select#pa_length').parent().css('width', '80px');


  // WOOCOMMERCE STYLING -------------------------------------

  // put in the actual minus symbol
  $("input.minus").replaceWith( "<input type=\"button\" value=\"&minus;\" class=\"minus btn btn-default\">" );
  $("input.input-text").addClass( "form-control" );
  $("input.input-text").attr( "id", "quantity" );
  $("input.plus").addClass( "btn btn-default" );
  $("button.single_add_to_cart_button").addClass("btn btn-default");
  $("form.variations_form").addClass( "form-inline" );
  $("#billing_country_chosen").removeAttr("style");

  $(window).resize(function(){
    fullIntro();
  });
  $(window).trigger('resize');
  // $(window).scroll(function() {});

});