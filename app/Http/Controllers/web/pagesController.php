<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\VehicleFeature;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use App\Models\ModelFeature;
use App\Models\InquiryForm;
use App\Models\Bookedride;
use App\Models\CarModel;
use App\Models\Testimonial;

class pagesController extends Controller
{
    public function index()
    {

        // var from request
        // $offset = (int) $request->offset = 0;
        // $limit = (int) $request->limit = 2;

        $offset = 0;
        $limit = 12;


        // fetch data
        $cars = VehicleModel::where('status', 1)
                            ->skip($offset)
                            ->take($limit)
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->get();
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        $brands = VehicleModel::where('status', 1)->get(['name', 'id']);

        $testimonials = Testimonial::where('status', 1)->paginate(20);
        // return $cars[0];
        return view('Web.pages.index', compact('cars', 'testimonials', 'makes', 'brands'));
    }

    public function viewContact()
    {
        return view('Web.contact');
    }

    public function viewFeedback()
    {
        $testimonials = Testimonial::where('status', 1)->paginate(100);
        return view('Web.feedback', compact('testimonials'));
    }


    public function viewProducts(Request $request)
    {
         // var from request
        $offset = (int) $request->offset;
        $limit = (int) $request->limit;

        

        // fetch data
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        $brands = VehicleModel::where('status', 1)->get(['name', 'id']);

        $cars = VehicleModel::where('status', 1)
                            ->skip($offset)
                            ->take($limit)
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('Web.products', compact('cars', 'makes', 'brands'));
    }

    public function viewVehicle_details(Request $request)
    {
        $offset = 0;
        $limit = 2;
        $id =  $request->checkProduct;
        $car = VehicleModel::where('id', $id)->first();


        // fetch data
        $veh_features = ModelFeature::where('model_id',$car->id)->get();
        $cars = VehicleModel::where('status', 1)
                            ->where('make_id', $car->make_id)
                            ->where('id', '<>', $car->id)
                            ->skip($offset)
                            ->take($limit)
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->get();
        $modelsImgs = ($car->modelsImgs);
        return view('Web.vehicle_details', compact('car', 'modelsImgs', 'cars', 'veh_features'));
    }







    // post data from view
    public function sendFeedback(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validate->fails()) {
            return  [
                'code'=> -2,
                'msg'=>$validate->errors()
            ];
        }

        $inquiry_form = InquiryForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // record was inserted
        if ($inquiry_form) {
            return [
                'code' => 1,
                'msg' => 'Record saved successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Error saving the record'
            ];
        }
    }



    public function bookRide(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
        ]);

        if ($validate->fails()) {
            return  [
                'code'=> -2,
                'msg'=>$validate->errors()
            ];
        }

        $inquiry_form = Bookedride::create([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'mobile' => $request->mobile,
        ]);

        // record was inserted
        if ($inquiry_form) {
            return [
                'code' => 1,
                'msg' => 'Record saved successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Error saving the record'
            ];
        }
    }

    


    public function searchVehicles(Request $request)
    {
        $brand =  $request->brand;
        $make =  $request->make;
        $maxprice =  $request->maxprice;
        $minprice =  $request->minprice;
        // return $request;
        // search with price or not
        if (is_null($maxprice) && is_null($maxprice)) {
            // search with make and model
            $cars = VehicleModel::where('status', 1)
                                ->where('make_id', $make)
                                ->where('model_id', $brand)
                                ->with('user')
                                ->with('modelsImgs')
                                ->get();
        }else if (is_null($maxprice)) {
            $cars = VehicleModel::where('status', 1)
                                    ->where('make_id', $make)
                                    ->where('model_id', $brand)
                                    ->where('price', '<', $minprice)
                                    ->with('user')
                                    ->with('modelsImgs')
                                    ->orderBy('id', 'desc')
                                    ->get();
        }else if (is_null($minprice)) {
            $cars = VehicleModel::where('status', 1)
                                    ->where('make_id', $make)
                                    ->where('model_id', $brand)
                                    ->where('price', '<', $maxprice)
                                    ->with('user')
                                    ->with('modelsImgs')
                                    ->orderBy('id', 'desc')
                                    ->get();
        }else{
            $cars = VehicleModel::where('status', 1)
                                    ->where('make_id', $make)
                                    ->where('model_id', $brand)
                                    ->where('price', '<=', $maxprice)
                                    ->where('price', '>=', $minprice)
                                    ->with('user')
                                    ->with('modelsImgs')
                                    ->orderBy('id', 'desc')
                                    ->get();
        }
        return [
            'code' => 1,
            'msg' => $cars
        ];

        $cars = VehicleModel::where('status', 1)->get();
    }


    public function searchmakemodels(Request $request)
    {
        $id = $request->id;
        $cars = CarModel::where('status', 1)->where('make_id', $id)->get();
        return [
            'code' => 1,
            'msg' => $cars
        ];

    }






    // other pages of the site

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function aboutUs(Request $request)
    {
        return view('Web.pages.about_us');
    }


    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function blogGridNoSideBar(Request $request)
    {
        return view('Web.pages.blog_grid_no_sidebar');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function blogGridSideBar(Request $request)
    {
        return view('Web.pages.blog_grid_sidebar');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function blogListingNoSideBar(Request $request)
    {
        return view('Web.pages.blog_listing_no_sidebar');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function blogListingSideBar(Request $request)
    {
        return view('Web.pages.blog_listing_sidebar');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function carGridNoSideBar(Request $request)
    {
        // fetch data
        $cars = VehicleModel::where('status', 1)                            
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->paginate(20);
        // return $cars;
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        return view('Web.pages.car_grid_no_sidebar', compact('cars', 'makes'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function carGridSideBar(Request $request)
    {
        // fetch data
        $cars = VehicleModel::where('status', 1)                            
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->paginate(20);
        // return $cars;
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        return view('Web.pages.car_grid_sidebar', compact('cars', 'makes'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function carListingNoSideBar(Request $request)
    {
        // fetch data
        $cars = VehicleModel::where('status', 1)                            
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->paginate(20);
        // return $cars;
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        return view('Web.pages.car_listing_no_sidebar', compact('cars', 'makes'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function carListingSideBar(Request $request)
    {
        // fetch data
        $cars = VehicleModel::where('status', 1)                            
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->paginate(20);
        // return $cars;
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        return view('Web.pages.car_listing_sidebar', compact('cars', 'makes'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function contactUS(Request $request)
    {
        return view('Web.pages.contact_us');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function singleCar(Request $request)
    {
        $offset = 0;
        $limit = 2;
        $id =  $request->checkProduct;
        $car = VehicleModel::where('id', $id)->first();
        // return $car;

        // fetch data
        $veh_features = ModelFeature::where('model_id',$car->id)->get();
        $cars = VehicleModel::where('status', 1)
                            ->where('make_id', $car->make_id)
                            ->where('id', '<>', $car->id)
                            ->skip($offset)
                            ->take($limit)
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->get();
        $modelsImgs = ($car->modelsImgs);
        // return $veh_features;
        return view('Web.pages.single_car', compact('car', 'modelsImgs', 'cars', 'veh_features'));
    }


    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function singlePost(Request $request)
    {
        return view('Web.pages.single_post');
    }



}

