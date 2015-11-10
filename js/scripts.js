function fullIntro() {
  var h = jQuery(window).height();
  var w = jQuery(window).width();
  jQuery('.full').css("min-height", (h*0.95)-60);
}

jQuery(document).ready(function($) {

  if ($(window).width() > 767) {
    fullIntro();
  };

  // style dropdowns
  //$('#s2id_billing_state').addClass('dropdown');
  //$('#s2id_billing_state > a').addClass('btn btn-default');

  // tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // single product > style the dropdowns
  //$('select#pa_length').parent().css('width', '80px');

  // remove width and height attributes
  $('div.intro-mobile-img > img').attr('width', '100%');


  // WOOCOMMERCE STYLING -------------------------------------

  // put in the actual minus symbol
  $("input.minus").replaceWith( "<input type=\"button\" value=\"&minus;\" class=\"minus btn btn-default\">" );
  $("input.input-text").addClass( "form-control" );
  $("input.input-text").attr( "id", "quantity" );
  $("input.plus").addClass( "btn btn-default" );
  $("button.single_add_to_cart_button").addClass("btn btn-default btn-lg green");
  $("form.variations_form").addClass( "form-inline" );
  $("#billing_country_chosen").removeAttr("style");

  // variable product
  $("#pa_color").after('<span class="caret">');
  $("#pa_length").after('<span class="caret">');

  $(window).resize(function(){
    if ($(window).width() > 767) {
      fullIntro();
    };
  });
  //$(window).trigger('resize');
  // $(window).scroll(function() {});

});