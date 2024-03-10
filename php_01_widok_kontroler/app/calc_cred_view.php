<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="post">
	<label for="id_amount">Kwota kredytu [zł]: </label>
	<input type="text" id="id_amount" name="amount" value="<?php if(isset($amount)) print($amount) ?>" /><br />
	<label for="id_years">Okres kredytowania [lata]: </label>
	<input type="text" id="id_years" name="years" value="<?php if(isset($years)) print($years); ?>" /><br />
	<label for="id_interest">Oprocentowanie [%]: </label>
	<input type="text" id="id_interest" name="interest" value="<?php if(isset($interestRate)) print($interestRate); ?>" /><br />
	<input type="submit" value="Oblicz raty kredytu" />
</form>

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if(isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo "Miesięczna rata: ".round($result, 2)." zł"; ?>
</div>
<?php } ?>
</body>
</html>