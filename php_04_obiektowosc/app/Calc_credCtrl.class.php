<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/Calc_credForm.class.php';
require_once $conf->root_path.'/app/Calc_credResult.class.php';

class Calc_credCtrl{

    private $msgs;
    private $form;
    private $monthlyRate;
    private $hideBanner;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new Calc_credForm();
        $this->monthlyRate = new Calc_credResult();
        $this->hideBanner = false;
    }

    public function getParams(){
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
        $this->form->interestRate = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;     
    }

    public function validate(){

        if (! (isset($this->form->amount) && isset($this->form->years) && isset($this->form->interestRate))) {
            return false;
        } else {
            $this->hideBanner = true;
        }
    
        if ( $this->form->amount == "") {
           $this->msgs->addError('Nie podano kwoty kredytu');
        }
        if ( $this->form->years == "") {
            $this->msgs->addError('Nie podano okresu kredytowania');
        }
        if ( $this->form->interestRate == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }
            
        if (! $this->msgs->isError()){

            if (! is_numeric( $this->form->amount )) {
                $this->msgs->addError('Pierwsza wartość nie jest liczbą');
            }
            
            if (! is_numeric( $this->form->years )) {
                $this->msgs->addError('Druga wartość nie jest liczbą');
            }	
        
            if (! is_numeric( $this->form->interestRate )) {
                $this->msgs->addError('Trzecia wartość nie jest liczbą');
            }
        }
    
        return ! $this->msgs->isError();
    }

    public function process(){
        $this->getParams();

        if($this->validate()){

            $this->form->amount = floatval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->interestRate = intval($this->form->interestRate);

            $this->monthlyRate->result = ($this->form->amount + ($this->form->interestRate/100 * $this->form->amount)) / $this->form->years/12;
        }

        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Obiekty w PHP');
        $smarty->assign('page_description','Oblicz miesięczną ratę kredytu podając kwote, okres kredytowania oraz oprocentowanie.');
        $smarty->assign('page_header','Kalkulator');

        $smarty->assign('hideBanner',$this->hideBanner);
        $smarty->assign('form',$this->form);
        $smarty->assign('monthlyRate',$this->monthlyRate);
        $smarty->assign('messages',$this->msgs);


        $smarty->display($conf->root_path.'/app/calc_cred_view.tpl');

    }


}