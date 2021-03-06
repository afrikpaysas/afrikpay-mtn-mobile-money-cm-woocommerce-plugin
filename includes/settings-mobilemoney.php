<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for PayPal Gateway.
 */
return array(
	'enabled' => array(
		'title'   => __( 'Enable/Disable', 'woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable Mobile Money', 'woocommerce' ),
		'default' => 'no',
	),
	'title' => array(
		'title'       => __( 'Title', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
		'default'     => __( 'Mobile Money', 'woocommerce' ),
		'desc_tip'    => true,
	),
	'description' => array(
		'title'       => __( 'Description', 'woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce' ),
		'default'     => __( 'Payer avec Mobile Money;', 'woocommerce' ),
	),
	'store' => array(
		'title'       => __( 'AfrikEcommerce Store Code', 'woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'Please enter your AfrikEcommerce Store Code; this is needed in order to take payment.', 'woocommerce' ),
	),
	'urlafrikpay' => array(
		'title'       => __( 'URL API Money', 'woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,		
		'description' => __( 'URL API Money', 'woocommerce' ),
	),
);
