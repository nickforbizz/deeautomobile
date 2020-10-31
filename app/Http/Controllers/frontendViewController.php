<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ModelFeature;
use App\Models\ModelsImg;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class frontendViewController extends Controller
{
    // return models of car
    public function carModelsView(Request $request)
    {   
        // nav show
        $nav_link = 'Y';
        return view('frontend.models')->with([
            'nav_link' => $nav_link,
        ]);
    }

    // single model view
    public function carSingleModelView(Request $request, $id)
    {
        // fetch data of that model
        $veh_model = VehicleModel::where('id', $id)
                            ->with('user')
                            ->with('modelsImgs')
                            ->first();
        $modelsImgs = ModelsImg::where('veh_model_id', $id)->get();
        $modelsFeatures = ModelFeature::where('model_id', $id)->get();
        // nav show
        $nav_link = 'Y';
        return view('frontend.single_model')->with([
            'nav_link' => $nav_link,
            'veh_model' => $veh_model,
            'modelsImgs' => $modelsImgs,
            'modelsFeatures' => $modelsFeatures,
        ]);
    }

    // postMessage
    public function postMessage(Request $request)
    {
        # vars from request
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $description = $request->message;

        $msg = Message::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'description' => $description,
        ]);

        if (!$msg) {
            return [
                'code' => -1,
                'msg' => 'Your message could not be posted at the moment, Try again later'
            ];
        }
        return [
            'code' => 1,
            'msg' => 'Message posted successfully '
        ];
    }
}
