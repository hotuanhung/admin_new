<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminCouponComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminUserComponent;
use App\Http\Livewire\Admin\AdminAddUserComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminUserDetailComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminOrderDetailComponent;

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
Route::get('/', [AdminController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/orders', [AdminController::class, 'Order'])->name('admin.orders');
Route::get('/admin/orders/{order_id}', [AdminController::class, 'OrderDetail'])->name('admin.ordersdetails');

Route::get('/admin/products', [AdminController::class, 'ShowProduct'])->name('admin.products');
Route::get('/admin/product/add', [AdminController::class, 'AddProduct'])->name('admin.product.add');

Route::get('/admin/product/edit/{product_id}', [AdminController::class, 'EditProduct'])->name('admin.product.edit');


Route::get('/admin/users', [AdminController::class, 'ShowUsers'])->name('admin.users');
Route::get('/admin/user/detail/{user_id}', [AdminController::class, 'UserDetail'])->name('admin.user.detail');
Route::get('/admin/user/add', [AdminController::class, 'AddUser'])->name('admin.user.add');
Route::get('/admin/user/edit/{user_id}', [AdminController::class, 'EditUser'])->name('admin.user.edit');

Route::get('/admin/coupons', AdminCouponComponent::class)->name('admin.coupons');
Route::get('/admin/coupon/add', AdminAddCouponComponent::class)->name('admin.coupon.add');
Route::get('/admin/coupon/edit/{coupon_id}', AdminEditCouponComponent::class)->name('admin.coupon.edit');
