<?php

namespace src\Service;

class NbpService
{
    private string $apiUrl = 'http://api.nbp.pl/api/exchangerates/tables/A';

    private function getContents(){
        $ch = curl_init($this->apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    private function parseToArray(){
        return json_decode($this->getContents(),TRUE);
    }

    public function getData() {
        return $this->parseToArray();
    }
}