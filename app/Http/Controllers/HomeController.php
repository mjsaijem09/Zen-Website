<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ShopFactory;
use App\Library\LocationFactory;
use App\Library\ServiceFactory;
use App\Library\TherapistFactory;
use Session;

class HomeController extends Controller {

    protected $Request;
    protected $ShopFactory;
    protected $LocationFactory;

    public function __construct(Request $Request, ShopFactory $ShopFactory, LocationFactory $LocationFactory, ServiceFactory $ServiceFactory, TherapistFactory $TherapistFactory) {

        $this->Request = $Request;
        $this->ShopFactory = $ShopFactory;
        $this->LocationFactory = $LocationFactory;
        $this->ServiceFactory = $ServiceFactory;
        $this->TherapistFactory = $TherapistFactory;
    }

    public function index(Request $request) {
        $data = [];
        $data['Shops'] = $this->ShopFactory->getAll();
        $data['Blog'] = $this->ShopFactory->getBlog();
        $data['topRatedTherapist'] = $this->TherapistFactory->getTopRated();
        $data['Service'] = $this->ServiceFactory->getAll();
        $data['mostBooked'] = $this->ShopFactory->getBooked();
        $data['Review'] = $this->ShopFactory->getReview();
        $data['Banner'] = $this->ShopFactory->getBanner();
        $data['ShopLocation'] = $this->LocationFactory->getAll();
        return view('home/index', $data);
    }

public function getAllLocations_view(Request $request) {
    
    return view('location/all_location');
}


public function getAllLocations_api(Request $request){
    session(['user_lat'=> $request->input('lat'), 'user_long'=>$request->input('long')]);
    return response()->json($response);
}
    
    public function view($id = '') {
        $data = [];
        if ($id != '') {
            $data['Shops'] = $this->ShopFactory->getDetailById($id);
            $data['Therapist'] = $this->TherapistFactory->getTherapistByLocationId($id);
            $data['Banner'] = $this->ShopFactory->getBanner();
            // $data['mostBooked'] = $this->ShopFactory->getBooked($id);
            $data['Service'] = $this->ServiceFactory->getAllWeb();
            $data['getOpenHour'] = $this->ShopFactory->getOpenHour('5ebf73f6e66af20019cfa55f');
            $date = $data['getOpenHour']['result'][0]['schedule'][1]['schedule_shift'][0]['time_start'];

            if (!empty($date)) {
                $date = strtotime($date);
                $data['open_hour'] = date('H:i:s', $date);
            } else {
                $data['open_hour'] = '';
            }
            $data['Review'] = $this->ShopFactory->getReview($id);
        }
        return view('home/view', $data);
    }

    public function massageDetail() {
        return view('service/massage_detail');
    }

    public function shopList() {
        $data = [];
        $data['Banner'] = $this->ShopFactory->getBanner();
        $data['Shops'] = $this->ShopFactory->getAll();

        return view('home/shops', $data);
    }

    public function mapList() {
        $data = [];
        $data['Banner'] = $this->ShopFactory->getBanner();
        $data['Shops'] = $this->ShopFactory->getAll();

        return view('home/shop_map_view', $data);
    }

    public function getLatLng() {
        $lat_long = $this->ShopFactory->getAll();
        return $lat_long;
    }

    public function BookAppointment($id = '') {
        $data = [];
        if ($id != '') {
            $data['Shops'] = $this->ShopFactory->getDetailById($id);
            $data['Service'] = $this->ServiceFactory->getAllWeb();
            $data['getOpenHour'] = $this->ShopFactory->getOpenHour('5ebf73f6e66af20019cfa55f');
        }
        return view('booking/index', $data);
    }

    public function serviceDetail($id = '') {
        $data = [];
        if ($id != '') {
            
        }
        return view('service/single_service', $data);
    }
}