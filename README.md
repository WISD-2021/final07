# 前端

## 首頁
<a href="https://i.imgur.com/H0Tm34m.png"><img src="https://i.imgur.com/H0Tm34m.png" title="source: imgur.com" /></a>
---
## 關於
<a href="https://i.imgur.com/tkm81r1.png"><img src="https://i.imgur.com/tkm81r1.png" title="source: imgur.com" /></a>
---
## 租賃器材
<a href="https://i.imgur.com/r2QNvIe.png"><img src="https://i.imgur.com/r2QNvIe.png" title="source: imgur.com" /></a>
---
## 個人資料
<a href="https://i.imgur.com/JkTlIos.png"><img src="https://i.imgur.com/JkTlIos.png" title="source: imgur.com" /></a>
---
## 個人資料(編輯)
<a href="https://i.imgur.com/JszTISt.png"><img src="https://i.imgur.com/JszTISt.png" title="source: imgur.com" /></a>
---

# 後端

## 器材管理
<a href="https://i.imgur.com/LaLoc25.png"><img src="https://i.imgur.com/LaLoc25.png" title="source: imgur.com" /></a>
---
## 器材管理(新增)
<a href="https://i.imgur.com/XhdixgO.png"><img src="https://i.imgur.com/XhdixgO.png" title="source: imgur.com" /></a>
---
## 器材管理(編輯)
<a href="https://i.imgur.com/FKqzsCl.png"><img src="https://i.imgur.com/FKqzsCl.png" title="source: imgur.com" /></a>
---
## 會員管理
<a href="https://i.imgur.com/kNeNObY.png"><img src="https://i.imgur.com/kNeNObY.png" title="source: imgur.com" /></a>
---

# ERD
<a href="https://i.imgur.com/m8HRmEN.png"><img src="https://i.imgur.com/m8HRmEN.png" title="source: imgur.com" /></a>
---
# 資料庫綱要圖
<a href="https://i.imgur.com/0ccVyjb.png"><img src="https://i.imgur.com/0ccVyjb.png" title="source: imgur.com" /></a>
---
# 資料表欄位設計
## 使用者資料表 會員資料表 管理者資料表 租賃單資料表
<a href="https://i.imgur.com/EEw8990.png"><img src="https://i.imgur.com/EEw8990.png" title="source: imgur.com" /></a>
## 租賃單明細資料表 器材資料表 購物車資料表
<a href="https://i.imgur.com/LgLgalG.png"><img src="https://i.imgur.com/LgLgalG.png" title="source: imgur.com" /></a>
---
# 系統名稱及作用
* 系統名稱:
  * 登山露營器具租借
* 作用:
  * 喜愛登山或露營的人，卻不想因為去幾次露營爬山購買裝備或者之後不會在去放在家中堆灰塵，能藉此系統讓大家方便租借露營爬山器具。
---
# 系統主要功能
* 會員：
  * 會員能查看器材
* 管理者:
  * 管理者可以新增、編輯、刪除器材管理
  *管理員可以查看會員管理
---
# 額外使用的套件或樣板 (簡要說明用途)
* 前台樣板：[free-bootstrap-4-html5-responsive-online-store-template-pillow-mart/](https://themewagon.com/themes/free-bootstrap-4-html5-responsive-online-store-template-pillow-mart/)
---
# 系統測試資料存放位置
* final07底下的sql資料夾
---
# 網站安裝(系統復原步驟)
1. 複製 https://github.com/WISD-2021/final07.git本系統在GitHub的專案
- **打開 Source tree，點選 Clone 後，輸入以下資料Source Path:https://github.com/WISD-2021/final07.git Destination Path:C:\wagon\uwamp\www\final07 打開cmder，切換至專案所在資料夾，cd final07**
@@ -73,27 +73,27 @@
2. 將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：：
- **DB_HOST=127.0.0.1**
- **DB_PORT=33060**
- **DB_DATABASE=final07**
- **DB_USERNAME=root**
- **DB_PASSWORD=root**
3. 復原完，建立資料庫
- **先進Adminer建立final07的資料庫**
- **建立好之後開啟cmder輸入以下指令： artisan migrate(成功執行後會復原所有資料表)**
- **artisan db:seed(建立假資料)**
4. 進入adminer
- **資料庫系統:MYSQL**
- **伺服器:localhost:33060**
- **帳號:root**
- **密碼:root**
5. 在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final07/public
# 初始專案與DB負責的同學
* 初級專案建置：[3A732031 陳靖媛](http://github.com/3A732031)
* 資料庫關聯：[3A732031 陳靖媛](http://github.com/3A732031)
* 資料建置：[3A732031 陳靖媛](http://github.com/3A732031)
* 資料庫資料建置：[3A732031 陳靖媛](http://github.com/3A732031)

# 系統使用帳號(使用者資料)
* 前台-會員 帳號：t86@gmail.com  密碼：final071
# 系統開發人員
* [3A732031 陳靖媛](http://github.com/3A732031)
* [3A732024 楊淯淳](http://github.com/3A732024)
# 工作分配
## 前台：[3A732031 陳靖媛](http://github.com/3A732031)
* // 首頁
  * Route::get('/', function () {return view('home');});
  * Route::middleware(['auth:sanctum', 'verified'])->get('index', function () {return view('home');});
* // 關於頁面
  * Route::get('/about', function (){return view('member.about');});
* // 個人資料
  * Route::middleware(['auth:sanctum', 'verified'])->get('/member',[MemberController::class,'show'])->name('member.show');
  * Route::middleware(['auth:sanctum', 'verified'])->get('/member/{member}/edit',[MemberController::class,'edit'])->name('member.edit');
  * Route::middleware(['auth:sanctum', 'verified'])->put('/member/{member}',[MemberController::class,'update'])->name('member.update');
* //器材
  * Route::get('/rentequipment',[EquipmentController::class,'index'])->name('rentequipment.index');
  * Route::get('/rentequipment/{equipment}',[EquipmentController::class,'show'])->name('rentequipment.show');
* // 購物車
  * Route::middleware(['auth:sanctum', 'verified'])->get('/rentcart',[CartItemController::class,'index'])->name('rentcart.index');
  * Route::middleware(['auth:sanctum', 'verified'])->delete('/rentcart/{rentcart}',[CartItemController::class,'destroy'])->name('rentcart.destroy');
  * Route::middleware(['auth:sanctum', 'verified'])->post('/rentcart',[CartItemController::class,'store'])->name('rentcart.add');
* //租賃單
  * Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder',[OrderController::class,'index'])->name('renteorder.index');
  * Route::middleware(['auth:sanctum', 'verified'])->post('/renteorder',[OrderController::class,'store'])->name('renteorder.store');
* //租賃單明細
  * Route::middleware(['auth:sanctum', 'verified'])->get('/renteorder/{rentorder}/detail',[OrderDetailController::class,'show'])->name('rodetail.show');
* //訂單頁面
  * Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');


## 後台：[3A732024 楊淯淳](http://github.com/3A732024)
* Route::prefix('admin')->group(function () {
  * //器材管理
  * Route::get('/', [ManagerController::class, 'index'])->name('admin.index');
  * //新增器材(無法套模板)
  * Route::get('/equipments/create',[ManagerEquipmentController::class,'create'])->name('admin.equipments.create');
  * //儲存器材
  * Route::post('/equipments/store',[ManagerEquipmentController::class,'store'])->name('admin.equipments.store');
  * //編輯器材(無法套模板)
  * Route::get('/equipments/{id}/edit',[ManagerEquipmentController::class,'edit'])->name('admin.equipments.edit');
  * //更新器材
  * Route::patch('equipments/{equipment}', [ManagerEquipmentController::class, 'update'])->name('admin.equipments.update');
  * //刪除器材
  * Route::delete('equipments/{equipment}', [ManagerEquipmentController::class, 'destroy'])->name('admin.equipments.destroy');
  * //會員管理(無法套模板)
  * //Route::get('members', [\App\Http\Controllers\AdminMemberController::class, 'index'])->name('admin.members.index');
  * //修改會員狀態
  * Route::patch('/members/{member}',[AdminMemberController::class,'update'])->name('admin.members.update');
  });

* //會員管理(用此方式才能讓頁面套到模版)
  * Route::get('/adminmembers', function () {
        $user_data = DB::table('users')->orderBy('id','ASC')->get();
        $member_data = DB::table('members')->orderBy('id','ASC')->get();
        return view('admin.members.index', ['user' => $user_data],['member' => $member_data]);
        return view('home');
    })->name('admin.members.index');;
