<?php
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BasketController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CounteragentController;
use App\Http\Controllers\Admin\DiscountCardController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MovingController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReceiptController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\Admin\RefundProducerController;
use App\Http\Controllers\Admin\RejectController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\StoreProductDiscountController;
use App\Http\Controllers\Admin\StoreProductPromotionController;
use App\Http\Controllers\Admin\UserController;
use App\Models\StoreProductDiscount;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'auth'])->name('auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['admin.check','auth:sanctum'])->group(function (){
    Route::get('main', [MainController::class, 'index'])->name('main');
});


