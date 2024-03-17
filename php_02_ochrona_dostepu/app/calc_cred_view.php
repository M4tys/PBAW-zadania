<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel='stylesheet' href='http://yui.yahooapis.com/pure/0.6.0/pure-min.css'>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href='<?php print(_APP_ROOT); ?>/app/security/logout.php' class='pure-button'>Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="post" class='pure-form pure-form-aligned'>
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_amount">Kwota kredytu [zł]: </label>
		<input type="text" id="id_amount" name="amount" value="<?php out($amount); ?>"><br>
		<label for="id_years">Okres kredytowania [lata]: </label>
		<input type="text" id="id_years" name="years" value="<?php out($years); ?>"><br>
		<label for="id_interest">Oprocentowanie [%]: </label>
		<input type="text" id="id_interest" name="interest" value="<?php out($interestRate); ?>"><br>
	</fieldset>
	<input type="submit" value="Oblicz raty kredytu" class="pure-button pure-button-primary">
</form>

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:450px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if(isset($monthlyRate)){ ?>
<div style="margin-top: 1em; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo "Miesięczna rata: ".round($monthlyRate, 2)." zł"; ?>
</div>
<?php } ?>
</div>
</body>
</html>