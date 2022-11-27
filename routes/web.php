<?php

use App\Helpers\SmsHelper;
use App\Helpers\YalidineHttpHelper;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SendSmsController;
use App\Http\Controllers\SerachController;
use Illuminate\Support\Facades\Auth;
use Modules\Orders\Entities\Order;

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

Route::name('store.')->group(function () {
    Route::middleware('hsd')->group(function () {
        Route::get('/', function (Request $request) {
                return App::call('Modules\BarbarosTools\Http\Controllers\BarbarosToolsController@index');
        })->name('home');
    });
});

Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', [HomeController::class, 'home']);
        Route::get('home', [StaterkitController::class, 'home'])->name('home');
    });
});

// Route Components


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
Route::get('sms/{num}', function ($num) {
    // SmsHelper::sendSms("تم استلام طلبك رقم 453 سنتصل بك للتأكيد. \nfb.com/rimoucha.shop", $num);
    //SmsHelper::sendSms("تم تأكيد طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
    SmsHelper::sendSms("تم ارسال طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
    //SmsHelper::sendSms("يرجى الرد على الهاتف لتأكيد طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
    //SmsHelper::sendSms("وصل طلبك  رقم 432 إلى ولايتك \nfb.com/rimoucha.shop", $num);
    //  SmsHelper::sendSms("عامل التسلم في طريقه لتسليم الطرد الخاص بك \nfb.com/rimoucha.shop", $num);
    return SmsHelper::sendSms("تم إلغاء طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
});

Route::post('send/sms', [SendSmsController::class, 'store'])->name('send.sms');

Route::get('search', [SerachController::class, 'index'])->name('search');


Route::get('yalidine/get/{yal}', function ($yal) {
    return YalidineHttpHelper::getParcelHistoryByYal($yal)['data'];
});

Route::get('yalidine/create', function () {
    return YalidineHttpHelper::createParcel(Order::all()->first());
});


Route::get('yalidine/update', function () {
    YalidineHttpHelper::updateParcelsInDb();
});


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
Route::get('sms/{num}', function ($num) {
    // SmsHelper::sendSms("تم استلام طلبك رقم 453 سنتصل بك للتأكيد. \nfb.com/rimoucha.shop", $num);
    //SmsHelper::sendSms("تم تأكيد طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
    SmsHelper::sendSms("تم ارسال طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
    //SmsHelper::sendSms("يرجى الرد على الهاتف لتأكيد طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
    //SmsHelper::sendSms("وصل طلبك  رقم 432 إلى ولايتك \nfb.com/rimoucha.shop", $num);
    //  SmsHelper::sendSms("عامل التسلم في طريقه لتسليم الطرد الخاص بك \nfb.com/rimoucha.shop", $num);
    return SmsHelper::sendSms("تم إلغاء طلبك رقم 432 \nfb.com/rimoucha.shop", $num);
});

Route::post('send/sms', [SendSmsController::class, 'store'])->name('send.sms');

Route::get('search', [SerachController::class, 'index'])->name('search');


Route::get('yalidine/get/{yal}', function ($yal) {
    return YalidineHttpHelper::getParcelHistoryByYal($yal)['data'];
});

Route::get('yalidine/create', function () {
    return YalidineHttpHelper::createParcel(Order::all()->first());
});


Route::get('yalidine/update', function () {
    YalidineHttpHelper::updateParcelsInDb();
});