<?php

namespace App\Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use GuzzleHttp\Client;

/**
 * Description of Http
 *
 * @author kamlesh
 */
class Http {

    protected $baseUri;

    public function __construct(string $baseUri) {
        $this->baseUri = $baseUri;
    }

    /**
     * Send a request to any service
     * @param type $method
     * @param type $requestUrl
     * @param type $queryParams
     * @param type $formParams
     * @param type $headers
     * @param type $hasFile
     * @return type string
     */
    public function makeRequest($method, $requestUrl, $queryParams = [], $formParams = [], $headers = [], $hasFile = false) {
        try {
            $client = new Client([
                'base_uri' => $this->baseUri,
            ]);

            $bodyType = 'form_params';

            if ($hasFile) {
                $bodyType = 'multipart';
                $multipart = [];

                foreach ($formParams as $name => $contents) {
                    $multipart[] = [
                        'name' => $name,
                        'contents' => $contents
                    ];
                }
            }

            $response = $client->request($method, $requestUrl, [
                'query' => $queryParams,
                $bodyType => $hasFile ? $multipart : $formParams,
                'headers' => $headers,
            ]);
            return [
                'code' => $response->getStatusCode(), // Status code of the response 401 if unauthorised
                'body' => json_decode($response->getBody()->getContents())
            ];
        } catch (\Exception $ex) {
            return [
                'code' => $ex->getCode(), // Status code of the response 401 if unauthorised
                'message' => $ex->getMessage(),
                'file' => $ex->getFile(),
                'line' => $ex->getLine()
            ];
        }
    }

}
