<?php
/**
 * Email Header
 *
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.4.0
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>

        <style type="text/css">
            body, p, h1, h2, h3, h4, h5, h6, 
            table, thead, tbody, tfoot, tr, th, td, 
            thead tr th, thead tr td,
            tbody tr th, tbody tr td,
            tfoot tr th, tfoot tr td, td span {
                font-family: "MarkWeb","MarkOT", system, -apple-system, ".SFNSDisplay-Regular","Helvetica Neue", Helvetica, Roboto, Arial, sans-serif !important;
                color: rgb(51, 51, 51) !important;
                text-align: left !important;
            }
            body,
            p,
            h5 {
                font-size: 16px !important;
                line-height: 1.4em !important;
            }
            a,
            p a,
            p > span > a {
                color: rgb(107,145,125) !important;
                text-decoration: none !important;
            }
            .email-meta p,
            .email-meta h5 {
                margin: 0;
            }
            h1 {
                font-size: 24px !important;
            }

            h2 {
                font-size: 20px !important;
            }            
            h5 {
                margin-bottom: 0;
            }
            footer ul,
            footer ul li {
                margin-left: 0 !important;
                padding-left: 0 !important;
            }
            footer ul li {
                display: inline-block !important;
                margin-right: 1.4em !important;
            }
            footer li,
            footer li a {
                font-size: 12px !important;
                color: #ddd !important;
            }
            small {
                font-weight: normal;
            }
            h1 {
                margin: 3em 0 !important;
            }
            h4 {
                font-weight: bold !important;
                text-transform: uppercase !important;
                margin: 2em 0 !important;

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
              margin-bottom: 50px;
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
            img {
                max-width: 400px;
            }
        </style>

	</head>
    <body>
    	<div <?php echo 'class="wrap"'; ?>>
			<div id="template_header_image" class="img-responsive">
        		<?php
        			if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
        				echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" />';
        			}
        		?>
			</div>

            <h1><?php echo $email_heading; ?></h1>

             <div id="body_content_inner">
