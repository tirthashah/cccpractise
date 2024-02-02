<?php

include "Lib/autoload.php";

$request = new Model_Request();

if(!$request->isPost()) {
	$product = new View_Product();
	echo $product->toHtml();
} else {
	print_r($request->getParams('pdata'));
	$product = new Model_Product();
	$product->save($request->getParams('pdata'));
	// print_r();
}