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
class TherapistFactory {

    protected $HttpClient;

    public function __construct(HttpClient $HttpClient) {
        $this->HttpClient = $HttpClient;
        $this->webId = config('app.WEB_OWNER_ID');
    }

    
    public function getAll(){
        return $this->HttpClient->getRequest('api/website/therapist?ownerId='.$this->webId);
        
    }
    
    public function getTopRated(){
        return $this->HttpClient->getRequest('api/website/therapist?ownerId='.$this->webId);
        
    }
    
    public function getDetailById($id=''){
        $Therapist =[];
        if($id!=''){
            $Therapist =  $this->HttpClient->getRequest('api/website/therapist_by_Id?therapistId='.$id);
        }
        return $Therapist != NULL ? $Therapist : [];
        
    }
    public function getReviewById($id=''){
        $Review =[];
        if($id!=''){
            $Review =  $this->HttpClient->getRequest('api/website/reviews/?therapistId='.$id);
        }
        return $Review != NULL ? $Review : [];
        
    }
    //On shop detail page
    public function getTherapistByLocationId($id=''){
        $Therapist =[];
        if($id!=''){
            $Therapist =  $this->HttpClient->getRequest('api/website/therapist?locationId='.$id);
        }
        return $Therapist != NULL ? $Therapist : [];
    }
    
    
}
