<?php
require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów

$amount = $_REQUEST ['amount'];
$years = $_REQUEST ['years'];
$interestRate = $_REQUEST ['interest'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if (! (isset($amount) && isset($years) && isset($interestRate))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $amount == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $years == "") {
	$messages [] = 'Nie podano okresu kredytowania';
}
if ( $interestRate == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	
	if (! is_numeric( $amount )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	

	if (! is_numeric( $interestRate )) {
		$messages [] = 'Trzecia wartość nie jest liczbą';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if( empty($messages) ) {
		
	$amount = floatval($amount);
	$years = intval($years);
	$interestRate = intval($interestRate);

	$result = ($amount + ($interestRate/100 * $amount)) / $years/12;
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_cred_view.php';


