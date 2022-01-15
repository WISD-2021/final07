<?php

use Illuminate\Support\Facades\Route;

use App\Models\Member;
use App\Models\User;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ManagerEquipmentController;


use App\Http\Controllers\ManagerController;

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

    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('index', function () {
    return view('home');
});

//會員
//關於
Route::get('/about', function (){
    return view('about');
});
//個人資料
Route::middleware(['auth:sanctum', 'verified'])->get('/member/{member}',[MemberController::class,'index'])->name('member.index');//顯示個人資料
Route::middleware(['auth:sanctum', 'verified'])->get('/member/{member}/edit',[MemberController::class,'edit'])->name('member.edit');//編輯個人資料
Route::middleware(['auth:sanctum', 'verified'])->put('/member/{member}',[MemberController::class,'update'])->name('member.update');//更新個人資料

//器材
Route::middleware(['auth:sanctum', 'verified'])->get('/rentequipment',[EquipmentController::class,'index'])->name('rentequipment.index');//顯示器材
Route::middleware(['auth:sanctum', 'verified'])->get('/rentequipment/{equipment}',[EquipmentController::class,'show'])->name('rentequipment.show');//顯示詳細器材資訊

//購物車
Route::middleware(['auth:sanctum', 'verified'])->get('/rentcart',[CartItemController::class,'index'])->name('rentcart.index');//顯示購物車內容
Route::middleware(['auth:sanctum', 'verified'])->delete('/rentcart/{rentcart}',[CartItemController::class,'destroy'])->name('rentcart.destroy');//刪除購物車項目
Route::middleware(['auth:sanctum', 'verified'])->post('/rentcart',[CartItemController::class,'store'])->name('rentcart.add');//購物車送出

//租賃單
Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder',[OrderController::class,'index'])->name('renteorder.index');//顯示租賃單
Route::middleware(['auth:sanctum', 'verified'])->post('/renteorder',[OrderController::class,'store'])->name('renteorder.store');//儲存租賃單
Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder/{rentorder}/items',[OrderController::class,'show'])->name('renteorder.items.show');//搜勳的租賃單
//租賃單明細
Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder/{rentorder}/detail',[OrderDetailController::class,'show'])->name('rodetail.show');//顯示租賃單明細

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->group(function () {

    //器材管理
    Route::get('/', [ManagerController::class, 'index'])->name('admin.index');
    //新增器材
    Route::get('/equipments/create',[ManagerEquipmentController::class,'create'])->name('admin.equipments.create');
    //儲存器材
    Route::post('/equipments/store',[ManagerEquipmentController::class,'store'])->name('admin.equipments.store');
    //編輯器材
    Route::get('/equipments/{id}/edit',[ManagerEquipmentController::class,'edit'])->name('admin.equipments.edit');
    //更新器材
    Route::patch('equipments/{equipment}', [ManagerEquipmentController::class, 'update'])->name('admin.equipments.update');
});

