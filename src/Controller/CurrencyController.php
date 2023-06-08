<?php

namespace src\Controller;

use src\Service\CurrencyService;

class CurrencyController extends Controller
{
    private CurrencyService $currencyService;

    public function __construct()
    {
        $this->currencyService = new CurrencyService();
    }

    public function index()
    {
        $currencies = $this->currencyService->getAll();
        $this->render('currency/index.html', [
            'currencies' => $currencies
        ]);
    }
}