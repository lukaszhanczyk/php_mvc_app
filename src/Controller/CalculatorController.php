<?php

namespace src\Controller;

use src\Service\CalculatorService;
use src\Service\CurrencyService;

class CalculatorController extends Controller
{
    private CalculatorService $calculatorService;
    private CurrencyService $currencyService;

    public function __construct()
    {
        $this->calculatorService = new CalculatorService();
        $this->currencyService = new CurrencyService();
    }

    public function index()
    {
        $calculations = $this->calculatorService->getAll();
        $this->render('calculator/index.html', [
            'calculations' => $calculations
        ]);
    }

    public function store()
    {
        $error = null;
        $currencies = $this->currencyService->getAll();

        if (isset($_POST) && !empty($_POST)) {
            if (!$_POST['value']){
                $error = "Value can't be null";
            }
            if (!$_POST['currency_from']){
                $error = "You should choose default currency";
            }
            if (!$_POST['currency_to']){
                $error = "You should choose currency";
            }

            if(!$error){
                $this->calculatorService->store($_POST);
                header("Location: /calculator");
            }
        }

        $this->render('calculator/store.html', [
            'currencies' => $currencies,
            'error' => $error
        ]);
    }
}