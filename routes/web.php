<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');






// my Routes
Route::get('/logout', 'HomeController@logout')->name('logout');


Route::post('/test', function () {
    return 'some thing'; 
})->name('test');











// view files
Route::get('/', 'web\pagesController@index')->name('webin');
Route::get('/about_us', 'web\pagesController@aboutUs')->name('aboutUs');
Route::get('/blog_grid_no_sidebar', 'web\pagesController@blogGridNoSideBar')->name('blogGridNoSideBar');
Route::get('/blog_grid_sidebar', 'web\pagesController@blogGridSideBar')->name('blogGridSideBar');
Route::get('/blog_listing_no_sidebar', 'web\pagesController@blogListingNoSideBar')->name('blogListingNoSideBar');
Route::get('/blog_listing_sidebar', 'web\pagesController@blogListingSideBar')->name('blogListingSideBar');
Route::get('/car_grid_no_sidebar', 'web\pagesController@carGridNoSideBar')->name('carGridNoSideBar');
Route::get('/car_grid_sidebar', 'web\pagesController@carGridSideBar')->name('carGridSideBar');
Route::get('/car_listing_no_sidebar', 'web\pagesController@carListingNoSideBar')->name('carListingNoSideBar');
Route::get('/car_listing_sidebar', 'web\pagesController@carListingSideBar')->name('carListingSideBar');
Route::get('/contact_us', 'web\pagesController@contactUS')->name('contactUS');
Route::get('/single_car', 'web\pagesController@singleCar')->name('singleCar');
Route::get('/single_post', 'web\pagesController@singlePost')->name('singlePost');




Route::get('/viewcontact', 'viewController@viewContact')->name('viewcontact');
Route::get('/viewfeedback', 'viewController@viewFeedback')->name('viewfeedback');
Route::get('/viewproducts', 'viewController@viewProducts')->name('viewproducts');
Route::get('/viewvehicle_details', 'viewController@viewVehicle_details')->name('viewvehicle_details');







// post data
Route::post('/sendfeedback', 'viewController@sendFeedback')->name('sendfeedback');
Route::post('/bookride', 'viewController@bookRide')->name('bookride');
Route::post('/searchvehicles', 'viewController@searchVehicles')->name('searchvehicles');
Route::post('/searchmakemodels', 'viewController@searchmakemodels')->name('searchmakemodels');
Route::post('/add_requestoffers', 'RequestOffersController@store')->name('addrequestoffers');















Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // protected Routes
    Route::get('/backend', function () {
        return view('Admin.pages.index'); 
    });

    Route::post('/register_user', 'HomeController@createUser')->name('registerUser');
    Route::get('/register', 'HomeController@register')->name('register');

     // home
     Route::get('/home', 'HomeController@index')->name('home');
     // user
     Route::get('/profile', 'HomeController@profile')->name('profile');

    //  template
     Route::get('/view_template', 'HomeController@template')->name('template');


    // users
    Route::get('/view_users', 'UserController@create')->name('viewusers');
    Route::get('/view_user', 'UserController@show')->name('viewUser');
    Route::get('/list_users', 'UserController@index')->name('listusers');
    Route::post('/edit_users', 'UserController@update')->name('editusers');
    Route::post('/add_users', 'UserController@store')->name('addusers');
    Route::get('/del_user', 'UserController@destroy')->name('delUser');

    // driverequest
    Route::get('/view_driverequests', 'DriveRequestController@create')->name('viewdriverequests');
    Route::get('/view_driverequest', 'DriveRequestController@show')->name('viewDriverequest');
    Route::get('/list_driverequests', 'DriveRequestController@index')->name('listdriverequests');
    Route::post('/edit_driverequests', 'DriveRequestController@update')->name('editdriverequests');
    Route::post('/add_driverequests', 'DriveRequestController@store')->name('adddriverequests');
    Route::get('/del_driverequest', 'DriveRequestController@destroy')->name('delDriverequest');

    // feedbackinquiry
    Route::get('/view_feedbackinquiries', 'FeedbackinquiryController@create')->name('viewfeedbackinquiries');
    Route::get('/view_feedbackinquiry', 'FeedbackinquiryController@show')->name('viewFeedbackinquiry');
    Route::get('/list_feedbackinquiries', 'FeedbackinquiryController@index')->name('listfeedbackinquiries');
    Route::post('/edit_feedbackinquiries', 'FeedbackinquiryController@update')->name('editfeedbackinquiries');    
    Route::get('/del_feedbackinquiry', 'FeedbackinquiryController@destroy')->name('delFeedbackinquiry');

    // requestoffers
    Route::get('/view_requestoffers', 'RequestOffersController@create')->name('viewrequestoffers');
    Route::get('/view_requestoffer', 'RequestOffersController@show')->name('viewRequestoffer');
    Route::get('/list_requestoffers', 'RequestOffersController@index')->name('listrequestoffers');
    Route::post('/edit_requestoffers', 'RequestOffersController@update')->name('editrequestoffers');    
    Route::get('/del_requestoffer', 'RequestOffersController@destroy')->name('delRequestoffer');

     // makes
     Route::get('/view_makes', 'makesController@create')->name('viewMakes');
     Route::get('/view_make', 'makesController@show')->name('viewMake');
     Route::get('/list_makes', 'makesController@index')->name('listMakes');
     Route::post('/edit_makes', 'makesController@update')->name('editMakes');
     Route::post('/add_makes', 'makesController@store')->name('addMakes');
     Route::get('/del_make', 'makesController@destroy')->name('delMake');

     // testimonials
     Route::get('/view_testimonials', 'testimonialController@create')->name('viewTestimonials');
     Route::get('/view_testimonial', 'testimonialController@show')->name('viewTestimonial');
     Route::get('/list_testimonials', 'testimonialController@index')->name('listTestimonials');
     Route::post('/edit_testimonials', 'testimonialController@update')->name('editTestimonials');
     Route::post('/add_testimonials', 'testimonialController@store')->name('addTestimonials');
     Route::get('/del_testimonial', 'testimonialController@destroy')->name('delTestimonial');



    //  settings
    Route::get('/view_settings', 'admin\settingsController@settingsView')->name('viewSettings');


    //  cars
    Route::get('/view_cars', 'admin\carController@create')->name('viewcars');
    Route::get('/list_cars', 'admin\carController@index')->name('listcars');
    Route::get('/list_cars_features', 'carFeaturesController@listCarFeatures')->name('listCarFeatures');

    //  models
     Route::get('/view_carmodels', 'carmodelsController@create')->name('viewcarModels');
     Route::get('/view_carmodel', 'carmodelsController@show')->name('viewcarModel');
     Route::get('/list_carmodels', 'carmodelsController@index')->name('listcarModels');
     Route::post('/edit_carmodels', 'carmodelsController@update')->name('editcarModels');
     Route::post('/add_carmodels', 'carmodelsController@store')->name('addcarModels');
     Route::get('/del_carmodel', 'carmodelsController@destroy')->name('delcarModel');

     // models vehicles
     Route::get('/view_models', 'modelsController@create')->name('viewModels');
     Route::get('/view_model', 'modelsController@show')->name('viewModel');
     Route::get('/list_models', 'modelsController@index')->name('listModels');
     Route::post('/edit_models', 'modelsController@update')->name('editModels');
     Route::post('/add_models', 'modelsController@store')->name('addModels');
     Route::get('/del_model', 'modelsController@destroy')->name('delModel');
 
     // vehicle features
     Route::get('/view_features', 'carFeaturesController@create')->name('viewFeatures');
     Route::get('/view_feature', 'carFeaturesController@show')->name('viewFeature');
     Route::get('/list_features', 'carFeaturesController@index')->name('listFeatures');
     Route::post('/edit_features', 'carFeaturesController@update')->name('editFeatures');
     Route::post('/add_features', 'carFeaturesController@store')->name('addFeatures');
     Route::get('/del_feature', 'carFeaturesController@destroy')->name('delFeature');
     
     // car features
     Route::post('/add_car_features', 'carFeaturesController@storeCarFeatures')->name('addCarFeatures');
});

Route::get('/klove/{toString}', "KloveController@index");
Route::get('/view_vehicles', 'frontendViewController@carModelsView')->name('viewVehicles');
Route::get('/view_single_model/{id}', 'frontendViewController@carSingleModelView')->name('viewSingleModel');
Route::get('/load_models', 'modelsController@loadModels')->name('loadModels');
Route::post('/post_msg', 'frontendViewController@postMessage')->name('postMsg');



