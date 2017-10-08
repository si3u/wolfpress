<?php
/*
 * Plugin Name: Send Mail via SMTP
 * Version: 1.0
 * Plugin URI: https://sieu.vn
 * Description: Send mail via smtp
 * Author: Nguyen Tuan Sieu
 * Author URI: https://me.sieu.vn
 */

define( 'WPSMTP_ON', true );
define( 'WPSMTP_HOST', 'smtp.sparkpostmail.com' );
define( 'WPSMTP_PORT', 587 );
define( 'WPSMTP_SSL', 'tls' );
define( 'WPSMTP_AUTH', true );
define( 'WPSMTP_USERNAME', 'SMTP_Injection' );
define( 'WPSMTP_PASSWORD', '440460339fcfcc32915404d1bc51193fa9644b6c' );
define( 'WPSMTP_MAIL_FROM', 'no-reply@mkr.sieu.vn' );
define( 'WPSMTP_MAIL_FROM_NAME', 'No-Reply' );
define( 'WPSMTP_RETURN_PATH', false );

if ( ! function_exists( 'phpmailer_init_smtp' ) ):

	function phpmailer_init_smtp( $phpMailer ) {
		if ( defined( 'WPSMTP_ON' ) && WPSMTP_ON ) {
			$phpMailer->Mailer = 'smtp';
		}

		if ( WPSMTP_RETURN_PATH ) {
			$phpMailer->Sender = $phpMailer->From;
		}

		$phpMailer->SMTPSecure = WPSMTP_SSL;
		$phpMailer->Host       = WPSMTP_HOST;
		$phpMailer->Port       = WPSMTP_PORT;
		$phpMailer->FromName   = WPSMTP_MAIL_FROM_NAME;
		$phpMailer->From       = WPSMTP_MAIL_FROM;

		if ( WPSMTP_AUTH ) {
			$phpMailer->SMTPAuth = true;
			$phpMailer->Username = WPSMTP_USERNAME;
			$phpMailer->Password = WPSMTP_PASSWORD;
		}
		$phpMailer->SMTPDebug = 2;
		apply_filters( 'wp_mail_smtp_custom_options', $phpMailer );
	}

endif;

add_action( 'phpmailer_init', 'phpmailer_init_smtp' );