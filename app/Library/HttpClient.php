<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Library;

use Illuminate\Support\Facades\Http;

/**
 * Description of HttpClient
 *
 * @author pt-999
 */
class HttpClient {

    protected $baseUrl;
    protected static $Headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
    ];

    /* Need to remove later*/    
    /*With authorization for dev */
    protected static $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        
    ];
    
    
    
    
    public function __construct() {
       
        $this->baseUrl = config('app.api_base_url');
    }

    /**
     * 
     * @param type $UserName
     * @param type $Password
     * @return type
     */
    public function getAuthToken($UserName = 'nidhi.s@parangat.com', $Password = '123456') {
        $response = [];
        if ($UserName != '' && $Password != '') {
            $responseJson = Http::withHeaders(self::$Headers)->post($this->baseUrl . 'api/users/login', [
                'email' => $UserName,
                'password' => $Password,
            ]);
            $response = json_decode($responseJson->body(), TRUE);
        }
        return $response;
    }

    /**
     * 
     * @param array $param
     * @param string $EndPoint
     */
    public function makeRequestPost(Array $param = [], string $EndPoint = 'api/') {
      
    }

    /**
     * 
     * @param array $param
     * @param string $EndPoint
     */
    public function makeRequestPut(Array $param = [], string $EndPoint = 'api/') {
        
    }

    /**
     * 
     * @param array $param
     * @param string $EndPoint
     */
    public function makeRequestGet(Array $param = [], string $EndPoint = 'api/') {
        
        $header = self::$headers;
        if($param['type']=='service'){
            /*customer token prod*/  
            $this->baseUrl ='http://18.216.120.11:8090/';
            $header['Authorization']='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZTRlNmUwOTJmNjQxYzAwMTkwYzEwMjYiLCJpYXQiOjE1ODUyMTc4MDB9.w8oI7FbaYaKNwJKUMvDPtQtsxtzPAsjtCi2M3oewOAM';
        }else{
            /* owner token*/            
            $header['Authorization']='Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZGU1MDMxN2U5MTI3NjQxZTU2NzI1YzAiLCJpYXQiOjE1ODUyOTM5OTR9.C6MZgS3x6DJHoLK76UyrFGSmCeiLljsC8fUhhqb_vNw';
            }
        
        $response = [];
        if ($param != '' && $EndPoint != '') {
            $responseJson = Http::withHeaders($header)->get($this->baseUrl . $EndPoint);
            $response = json_decode($responseJson->body(), TRUE);
        }
        
        return $response;
    }
    
    /*without header and authorization */
    
    public function getRequest(string $EndPoint = 'api/'){
        $responseJson = Http::get($this->baseUrl . $EndPoint);
        $response = json_decode($responseJson->body(), TRUE);
        return $response;
    }

    
    /**
     * 
     * @param array $param
     * @param string $EndPoint
     */
    public function makeRequestDelete(Array $param = [], string $EndPoint = 'api/') {
        
    }

}
