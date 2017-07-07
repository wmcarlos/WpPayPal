<?php

	require 'start.php';

	use PayPal\Api\Payer;
	use PayPal\Api\Item;
	use PayPal\Api\ItemList;
	use PayPal\Api\Details;
	use PayPal\Api\Amount;
	use PayPal\Api\Transaction;
	use PayPal\Api\RedirectUrls;
	use PayPal\Api\Payment;

	if(!isset($_POST['product']) and !isset($_POST['price'])){
		die();
	}

	$product = $_POST['product'];
	$price = $_POST['price'];

	$shipping = 1.5;

	$total = $price + $shipping;

	$base_url = "http://localhost/WpPaypal/";

	$payer = new Payer();

	$payer->setPaymentMethod("paypal");


	$item = new Item();

	$item->setName($product)
	->setCurrency("USD")
	->setQuantity(1)
	->setPrice($price);

	$itemList = new ItemList();

	$itemList->setItems([$item]);

	$details = new Details();

	$details->setShipping($shipping)
	->setSubtotal($price);

	$amount = new Amount();

	$amount->setCurrency("USD")
	->setTotal($total);

	$transaction = new Transaction();

	$transaction->setAmount($amount)
	->setItemList($ItemList)
	->setDescription("Pagar este Delicioso Cafe!!")
	->setInvoiceNumber(uniqid());

	$redirecurls = new RedirectUrls();

	$redirecurls->setReturnUrl($base_url."pay.php?success=true")
	->setCancelUrl($base_url."pay.php?success=false");

	$payment = new Payment();

	$payment->setIntent("sale")
	->setPayer($payer)
	->setRedirectUrls($redirecurls)
	->setTransactions([$transaction]);

	try {
		$payment->create($paypal);
	} catch (Exception $e) {
		ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
   		exit(1);
	}

	$approvalUrl = $payment->getApprovalLink();

	header("Location: ".$approvalUrl);