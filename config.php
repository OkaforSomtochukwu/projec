<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "",
		"publishableKey" => "pk_test_51LYT2jEtiRaw6zOYoCwE8Fm1WDv1myyphjDGQCA79HXHmrtzidzTcfWvXgHI7DRMomYztrjLalcdNMZk4RwRtqWf00x8s80B7f"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
