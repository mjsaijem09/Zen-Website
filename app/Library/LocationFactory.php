<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Library;

use App\Library\HttpClient;

/**
 * Description of ShopFactory
 *
 * @author Anu
 */
class LocationFactory {

    protected $HttpClient;

    public function __construct(HttpClient $HttpClient) {
        $this->HttpClient = $HttpClient;
    }

    public function getAll() {
        $param=['type'=>''];
        return $this->HttpClient->makeRequestGet($param,'api/location');
    }

}
