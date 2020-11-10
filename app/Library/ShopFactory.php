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
class ShopFactory {

    protected $HttpClient;

    public function __construct(HttpClient $HttpClient) {
        $this->HttpClient = $HttpClient;
        $this->webId = config('app.WEB_OWNER_ID');
    }

    public function getUser() {
        return $this->HttpClient->getAuthToken();
    }
    
    public function getAll(){
      
        
        $all_Shops =[];
        if(!empty($this->webId)){
            $all_Shops =  $this->HttpClient->getRequest('api/website/company?ownerId='.$this->webId);
        }
        
        return $all_Shops!=NULL?$all_Shops:'';
        
    }
    
    
    public function getDetailById($id){
        $Shops =  $this->HttpClient->getRequest('api/website/location_detail/'.$id);
        return $Shops != NULL ? $Shops : [];
        
    }
    
    public function getBlog(){
        
        $blog =  $this->HttpClient->getRequest('api/website/blogs?ownerId='.$this->webId);
        return $blog!=NULL?$blog:'';
        
    }
    
    public function getBooked($id=''){
        //after using owner id location id is not in use temporarily
        $bookedServices =[];
        if(!empty($id)){
//            $bookedServices =  $this->HttpClient->getRequest('api/website/most_booked_services?locationId='.$id);
             $bookedServices =  $this->HttpClient->getRequest('api/website/most_booked_services?ownerId='.$this->webId);
        }else{
            $bookedServices =  $this->HttpClient->getRequest('api/website/most_booked_services?ownerId='.$this->webId);
        }
        
        return $bookedServices!=NULL?$bookedServices:'';
        
    }
     public function getOpenHour($id=''){
         
        $review = [];
        if(!empty($id)){
             $review =  $this->HttpClient->getRequest('api/website/hours?location='.$id.'&ownerId=5e4e565a2690c20019750aa4');
            
        }
        
        return $review!=NULL?$review:'';
    }
    
    public function getReview($id=''){
        $review = [];
        if(!empty($id)){
             $review =  $this->HttpClient->getRequest('api/website/reviews/?locationId='.$id);
        }else{
            $review =  $this->HttpClient->getRequest('api/website/reviews?ownerId='.$this->webId);
        }
        
        return $review!=NULL?$review:'';
    }
    public function getBanner(){
         $banner =  $this->HttpClient->getRequest('api/website/banner');
        return $banner!=NULL?$banner:'';
    }
}
