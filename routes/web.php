<?php

use Illuminate\Support\Facades\Route;

use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\AdminMemberController;
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
    return view('member.about');
});
//個人資料
Route::middleware(['auth:sanctum', 'verified'])->get('/member',[MemberController::class,'show'])->name('member.show');//顯示個人資料
Route::middleware(['auth:sanctum', 'verified'])->get('/member/{member}/edit',[MemberController::class,'edit'])->name('member.edit');//編輯個人資料
Route::middleware(['auth:sanctum', 'verified'])->put('/member/{member}',[MemberController::class,'update'])->name('member.update');//更新個人資料

//器材
Route::get('/rentequipment',[EquipmentController::class,'index'])->name('rentequipment.index');//顯示器材
Route::get('/rentequipment/{equipment}',[EquipmentController::class,'show'])->name('rentequipment.show');//顯示詳細器材資訊

//購物車
Route::middleware(['auth:sanctum', 'verified'])->get('/rentcart',[CartItemController::class,'index'])->name('rentcart.index');//顯示購物車內容
Route::middleware(['auth:sanctum', 'verified'])->delete('/rentcart/{rentcart}',[CartItemController::class,'destroy'])->name('rentcart.destroy');//刪除購物車項目
Route::middleware(['auth:sanctum', 'verified'])->post('/rentcart',[CartItemController::class,'store'])->name('rentcart.add');//購物車送出

//租賃單
Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder',[OrderController::class,'index'])->name('renteorder.index');//顯示租賃單
Route::middleware(['auth:sanctum', 'verified'])->post('/renteorder',[OrderController::class,'store'])->name('renteorder.store');//儲存租賃單
//租賃單明細
Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder/{rentorder}/detail',[OrderDetailController::class,'show'])->name('rodetail.show');//顯示租賃單明細

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->group(function () {

    //器材管理
    Route::get('/', [ManagerController::class, 'index'])->name('admin.index');
    //新增器材(無法套模板)
    Route::get('/equipments/create',[ManagerEquipmentController::class,'create'])->name('admin.equipments.create');
    //儲存器材
    Route::post('/equipments/store',[ManagerEquipmentController::class,'store'])->name('admin.equipments.store');
    //編輯器材(無法套模板)
    Route::get('/equipments/{id}/edit',[ManagerEquipmentController::class,'edit'])->name('admin.equipments.edit');
    //更新器材
    Route::patch('equipments/{equipment}', [ManagerEquipmentController::class, 'update'])->name('admin.equipments.update');
    //刪除器材
    Route::delete('equipments/{equipment}', [ManagerEquipmentController::class, 'destroy'])->name('admin.equipments.destroy');
    //會員管理(無法套模板)
    //Route::get('members', [\App\Http\Controllers\AdminMemberController::class, 'index'])->name('admin.members.index');
    //修改會員狀態
    Route::patch('/members/{member}',[AdminMemberController::class,'update'])->name('admin.members.update');
});

//會員管理(用此方式才能讓頁面套到模版)
Route::get('/adminmembers', function () {
    $user_data = DB::table('users')->orderBy('id','ASC')->get();
    $member_data = DB::table('members')->orderBy('id','ASC')->get();
    return view('admin.members.index', ['user' => $user_data],['member' => $member_data]);
    return view('home');
})->name('admin.members.index');;
