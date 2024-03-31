<?php

require_once dirname(__FILE__).'/../config.php';

require_once $conf->root_path.'/app/Calc_credCtrl.class.php';

$ctrl = new Calc_credCtrl();
$ctrl->process();