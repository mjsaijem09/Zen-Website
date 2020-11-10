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
class ServiceFactory {

    protected $HttpClient;

    public function __construct(HttpClient $HttpClient) {
        $this->HttpClient = $HttpClient;
        $this->webId = config('app.WEB_OWNER_ID');
    }

    public function getAll() {
        $param=['type'=>'service'];
        return $this->HttpClient->makeRequestGet($param,'api/customers/service?shop_owner=5e4e54b32690c20019750a9e&locationId=5e4e54b32690c20019750a9f');
    }

    public function getAllWeb() {
        
        return $this->HttpClient->getRequest('api/website/services?ownerId='.$this->webId);
    }
    
    public function getType(){
        return $this->HttpClient->getRequest('api/website/service_type');
        
    }

}
