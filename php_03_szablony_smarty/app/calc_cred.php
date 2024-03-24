<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH."/lib/smarty/Smarty.class.php";


function getParams(&$form){
	$form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$form['interestRate'] = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}


function validate(&$form,&$messages) {

	if (! (isset($form['amount']) && isset($form['years']) && isset($form['interestRate']))) {
		return false;
	}

	if ( $form['amount'] == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $form['years'] == "") {
		$messages [] = 'Nie podano okresu kredytowania';
	}
	if ( $form['interestRate'] == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if(count($messages) != 0) return false;
		
	if (! is_numeric( $form['amount'] )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą';
	}
	
	if (! is_numeric( $form['years'] )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	

	if (! is_numeric( $form['interestRate'] )) {
		$messages [] = 'Trzecia wartość nie jest liczbą';
	}

	if(count($messages) != 0) return false;
	else return true;
	
}


function process(&$form,&$messages,&$monthlyRate){

	$form['amount'] = floatval($form['amount']);
	$form['years'] = intval($form['years']);
	$form['interestRate'] = intval($form['interestRate']);

	$monthlyRate = ($form['amount'] + ($form['interestRate']/100 * $form['amount'])) / $form['years']/12;
	
}

$form = [];
$monthlyRate = null;
$messages = [];
$hideBanner = false;

getParams($form);
if(validate($form,$messages)){
	process($form,$messages,$monthlyRate);
	$hideBanner = true;
}



$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Szablonowanie smarty');
$smarty->assign('page_description','Oblicz miesięczną ratę kredytu podając kwote, okres kredytowania oraz oprocentowanie.');
$smarty->assign('page_header','Kalkulator');

$smarty->assign('hideBanner',$hideBanner);
$smarty->assign('form',$form);
$smarty->assign('monthlyRate',$monthlyRate);
$smarty->assign('messages',$messages);


$smarty->display(_ROOT_PATH.'/app/calc_cred_view.html');