<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\pricingController;
use App\Http\Controllers\serviceController;

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

Route::get('/', function () {
    return view('component.home');
});

Route::get('/about',
    [aboutController::class, 'viewAbout']
);

Route::get('/blog', 
    [blogController::class, 'viewBlog']
);

Route::get('/contact', 
    [contactController::class, 'viewContact']
);

Route::post('/saveContact', 
    [contactController::class, 'saveContact']
);

Route::get('/pricing', 
    [pricingController::class, 'viewPricing']
);

Route::get('/service', 
    [serviceController::class, 'viewService']
);

Route::get('/details', 
    [detailController::class, 'viewDetails']
);

Route::get('/display', 
    [contactController::class, 'showContact']
);
