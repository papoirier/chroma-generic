<?php
/**
 * Email Styles
 *
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Load colours

$bg              = "#FFF";
$body            = "#FFF";
$base            = "rgb(107,145,125)";
$base_text       = wc_light_or_dark( $base, 'rgb(51, 51, 51)', '#ffffff' );
$text            = "rgb(51, 51, 51)";

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

/*
$bg              = '#FFF'
$body            = '#FFF';
$base            = 'rgb(107,145,125)';
$base_text       = 'rgb(51, 51, 51)';
$text            = 'rgb(51, 51, 51)';

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );
*/

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
?>
body,
p {
    font-size: 18px;
    line-height: 1.4em;
}
body, html, 
table, thead, tbody, tfoot, tr, th, td, 
thead tr th, thead tr td,
tbody tr th, tbody tr td,
tfoot tr th, tfoot tr td,
td span,
h1,h2,h3,h4,h5,h6,
p {
    font-family: "MarkWeb","MarkOT", system, -apple-system, ".SFNSDisplay-Regular","Helvetica Neue", Helvetica, Roboto, Arial, sans-serif !important;
    color: rgb(51, 51, 51) !important;
    border: none !important;
}
#wrapper {
    background-color: <?php echo esc_attr( $bg ); ?>;
    margin: 0;
    padding: 70px 0 70px 0;
    -webkit-text-size-adjust: none !important;
    width: 100%;
}

#template_container {
    /*box-shadow: 0 1px 4px rgba(0,0,0,0.1) !important; 
    background-color: <?php echo esc_attr( $body ); ?>;
    border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
    border-radius: 3px !important;*/
    border: none !important;
    border-top: 1px solid #ddd !important;
    border-radius: 0px !important;
    padding-top: 1em;
}

#template_header {
    background-color: transparent;
    border-radius: 3px 3px 0 0 !important;
    color: <?php echo esc_attr( $base_text ); ?>;
    border-bottom: 0;
    font-weight: bold;
    line-height: 100%;
    vertical-align: middle;
}
#template_header_image {
    margin: 1em auto 3em auto;
}
#template_header_image p img {
    display: block;
    width: 272px;
}
#template_header h1 {
    color: <?php echo esc_attr( $text ); ?>;
}
#template_footer {
    margin-top: 3em;
}
#template_footer td {
    padding: 0;
}
#template_footer #credit p {
    border:0;
    color: rgb(200,200,200);
    padding: 0 48px 48px 48px;
    font-size:12px !important;
    text-align: center;
}

#body_content {
    background-color: <?php echo esc_attr( $body ); ?>;
}
td {
    padding: 0;
}

#body_content table td {
    /*padding: 48px; */

}

#body_content table td td {
    /*padding: 12px; */
}

#body_content table td th {
    /*padding: 12px; */
}

#body_content p {
    margin: 0 0 16px;
}

#body_content_inner {
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

.td {
    color: <?php echo esc_attr( $text_lighter_20 ); ?>;
    border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
}

.text {
    color: <?php echo esc_attr( $text ); ?>;
}

.link {
    color: <?php echo esc_attr( $base ); ?>;
}
h1 {
    font-size: 30px;
    font-weight: 300;
    line-height: 150%;
    margin: 0;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    margin: 30px 0px;
}

h2 {
    display: block;
    font-size: 18px;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
    display: block;
    font-size: 16px;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
    color: <?php echo esc_attr( $base ); ?> !important;
    font-weight: normal;
    text-decoration: none;
}

img {
    border: none;
    display: inline;
    font-size: 14px;
    font-weight: bold;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
    text-transform: capitalize;
}
/* TABLE */
table {
    border-spacing: 0;
    border-collapse: collapse;
}
td,
th {
  padding: 0;
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
table.table th,
table.table td {
    font-size: 16px;
}

<?php
