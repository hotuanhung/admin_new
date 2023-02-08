<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $value = 6;
        return view('admin', compact('value'));
    }
    public function AddCoupon(){
        $value = 1;
        return view('admin', compact('value'));
    }
    public function AddProduct(){
        $value = 2;
        return view('admin',  compact('value'));
    }
    public function AddUser(){
        $value = 3;
        return view('admin', compact('value'));
    }
    public function Coupon(){
        $value = 4;
        return view('admin', compact('value'));
    }  
    public function CouponList(){
        $value = 5;
        return view('admin', compact('value'));
    }
    public function EditCoupon(){
        $value = 7;
        return view('admin', compact('value'));
    }
    public function EditProduct($product_id){
        $value = 8;
        return view('admin', compact('value', 'product_id'));
    }
    public function EditUser($user_id){
        $value = 9;
        return view('admin', compact('value'));
    }
    public function Order(){
        $value = 10;
        return view('admin', compact('value'));
    }
    public function OrderDetail($order_id){
        $value = 11;
        return view('admin', compact('value', 'order_id'));
    }
    public function ShowProduct(){
        $value = 12;
        return view('admin', compact('value'));
    }
    public function ShowUsers(){
        $value = 13;
        return view('admin', compact('value'));
    }
    public function UserDetail($user_id){
        $value = 13;
        return view('admin', compact('value', 'user_id'));
    }
}