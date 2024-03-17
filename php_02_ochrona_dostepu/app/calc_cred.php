<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów
function getParams(&$amount,&$years,&$interestRate){
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interestRate = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$amount,&$years,&$interestRate,&$messages) {

	if (! (isset($amount) && isset($years) && isset($interestRate))) {
		return false;
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

	if(count($messages) != 0) return false;
		
	if (! is_numeric( $amount )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	

	if (! is_numeric( $interestRate )) {
		$messages [] = 'Trzecia wartość nie jest liczbą';
	}

	if(count($messages) != 0) return false;
	else return true;
	
}

// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$amount,&$years,&$interestRate,&$messages,&$monthlyRate){
	global $role;

	$amount = floatval($amount);
	$years = intval($years);
	$interestRate = intval($interestRate);

	if($role != 'admin' && $amount > 100000){
		$messages[] = "Tylko administrator może podać kwotę większą od 100 000 zł";
	} else {
		$monthlyRate = ($amount + ($interestRate/100 * $amount)) / $years/12;
	} 
	
}

$amount = null;
$years = null;
$interestRate = null;
$monthlyRate = null;
$messages = [];

getParams($amount,$years,$interestRate);
if(validate($amount,$years,$interestRate,$messages)){
	process($amount,$years,$interestRate,$messages,$monthlyRate);
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_cred_view.php';


