<?php

	require '../vendor/autoload.php';

	$paypal = new PayPal\Rest\ApiContext(
		new PayPal\Auth\OAuthTokenCredential(
			'ARHkvTlT-lfSKR3tsVY94JjA2VyJLdsGx3hz3-DfC1hdtyj93fxT5qHhMA5r3AwcmPac_X5BkPTdhwEA',
			'EItepw4OOPPNemJrvCOG5iVvajGMOqzXj2jmIiOHjTqOsFc1Ukf-FGEW8FUR9sygambQaRKBucprnWCc'
		)
	);