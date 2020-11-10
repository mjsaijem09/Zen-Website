<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ServiceFactory;
use App\Library\ShopFactory;

class ServicesController extends Controller
{
    protected $TherapistFactory;
    protected $ShopFactory;
    public function __construct(Request $Request, ServiceFactory $ServiceFactory , ShopFactory $ShopFactory) {

        $this->Request = $Request;
        $this->ServiceFactory = $ServiceFactory;
        $this->ShopFactory = $ShopFactory;
        
    }
    
    public function index() {
        $data = [];
        $data['Banner'] = $this->ShopFactory->getBanner();
        $data['Service'] = $this->ServiceFactory->getAllWeb();
        session(['serviceSessionData' =>$data['Service']]);
        
        return view('service/index', $data);
    }

    public function serviceType() {
        $ServiceType = $this->ServiceFactory->getType();
        session(['serviceTypeSessionData' => $ServiceType]);
        echo '<pre>';
        print_r($ServiceType);
        die;
    }
}
