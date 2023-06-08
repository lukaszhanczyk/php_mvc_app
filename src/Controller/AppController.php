<?php

namespace src\Controller;

class AppController extends Controller
{
    public function index()
    {
        $this->render('index.html');
    }
}