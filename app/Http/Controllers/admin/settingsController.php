<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\models;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\VehicleFeature;
use App\Models\ModelsImg;
use App\Models\VehicleMake;
use App\Models\CarModel;
use App\Models\VehicleModel;

class settingsController extends Controller
{

    /**
     * View settings page
     *
     * @param Request $request
     * @return void
     */
    public function settingsView(Request $request)
    {
            return view('Admin.pages.settings');
    }
}
