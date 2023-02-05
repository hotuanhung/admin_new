<?php

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
 Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
 Route::get('/admin/category', AdminCategoriesComponent::class)->name('admin.categories');
 Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
 Route::get('/admin/orders/{order_id}', AdminOrderDetailComponent::class)->name('admin.ordersdetails');

 Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
 Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.product.add');
 Route::get('/admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.product.edit');


 Route::get('/admin/users', AdminUserComponent::class)->name('admin.users');
 Route::get('/admin/user/detail/{user_id}', AdminUserDetailComponent::class)->name('admin.user.detail');
 Route::get('/admin/user/add', AdminAddUserComponent::class)->name('admin.user.add');
 Route::get('/admin/user/edit/{user_id}', AdminAddUserComponent::class)->name('admin.user.edit');

 Route::get('/admin/coupons', AdminCouponComponent::class)->name('admin.coupons');
 Route::get('/admin/coupon/add', AdminAddCouponComponent::class)->name('admin.coupon.add');
 Route::get('/admin/coupon/edit/{coupon_id}', AdminEditCouponComponent::class)->name('admin.coupon.edit');
