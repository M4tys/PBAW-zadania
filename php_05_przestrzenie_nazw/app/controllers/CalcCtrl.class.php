<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl{

    private $form;
    private $monthlyRate;
    private $hideBanner;

    public function __construct(){
        $this->form = new CalcForm();
        $this->monthlyRate = new CalcResult();
        $this->hideBanner = false;
    }

    public function getParams(){
        $this->form->amount = getFromRequest('amount');
        $this->form->years = getFromRequest('years');
        $this->form->interestRate = getFromRequest('interest');
    }

    public function validate(){

        if (! (isset($this->form->amount) && isset($this->form->years) && isset($this->form->interestRate))) {
            return false;
        } else {
            $this->hideBanner = true;
        }
    
        if ( $this->form->amount == "") {
           getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ( $this->form->years == "") {
            getMessages()->addError('Nie podano okresu kredytowania');
        }
        if ( $this->form->interestRate == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
            
        if (! getMessages()->isError()){

            if (! is_numeric( $this->form->amount )) {
                getMessages()->addError('Pierwsza wartość nie jest liczbą');
            }
            
            if (! is_numeric( $this->form->years )) {
                getMessages()->addError('Druga wartość nie jest liczbą');
            }	
        
            if (! is_numeric( $this->form->interestRate )) {
                getMessages()->addError('Trzecia wartość nie jest liczbą');
            }
        }
    
        return ! getMessages()->isError();
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

        getSmarty()->assign('page_title','Przestrzenie nazw');
        getSmarty()->assign('page_description','Oblicz miesięczną ratę kredytu podając kwote, okres kredytowania oraz oprocentowanie.');
        getSmarty()->assign('page_header','Kalkulator');

        getSmarty()->assign('hideBanner',$this->hideBanner);
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('monthlyRate',$this->monthlyRate);

        getSmarty()->display('CalcView.tpl');

    }


}