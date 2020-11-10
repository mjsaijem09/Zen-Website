<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\TherapistFactory;
use App\Library\ShopFactory;

class TherapistController extends Controller
{
    protected $TherapistFactory;
    protected $ShopFactory;
    
    public function __construct(Request $Request,ShopFactory $ShopFactory, TherapistFactory $TherapistFactory) {

        $this->Request = $Request;
        $this->TherapistFactory = $TherapistFactory;
        $this->ShopFactory = $ShopFactory;
    }
    
    public function index() {
        $data = [];
        $data['Banner'] = $this->ShopFactory->getBanner();
        $data['Therapist'] = $this->TherapistFactory->getAll();
        session(['therapistSessionData' => $data['Therapist']]);
        return view('therapist/index',$data);
    }

    public function view($id =''){
        $data = [];
        if ($id != '') {
            $data['Therapist'] = $this->TherapistFactory->getDetailById($id);
            $data['TherapistLocation'] = $this->TherapistFactory->getTherapistByLocationId($id);
            $data['ratings'] =  $this->TherapistFactory->getReviewById($id);
            $data['Shops'] = $this->ShopFactory->getDetailById($id);
            $data['Banner'] = $this->ShopFactory->getBanner();
        }
        return view('therapist/view',$data);
    }
}
