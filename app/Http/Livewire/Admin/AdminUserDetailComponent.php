<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\HasCoupon;
use App\Models\Coupon;
use App\Models\User;
class AdminUserDetailComponent extends Component
{
    public $user_id;
    public function mount($user_id)
    {
        $this->$user_id = $user_id;
        
    }
    public function render()
    {
        $couponList=Coupon::orderBy('id','DESC')->get();
        $orders=Order::where('user_id',$this->user_id)->get();
        $sum=Order::where('user_id',$this->user_id)->sum('total');
        $user = User::where('id',$this->user_id)->first();
        $coupons = HasCoupon::where('user_id',$this->user_id)->get();
        return view('livewire.admin.admin-user-detail-component',[
            'user'=> $user,
            'orders'=> $orders,
            'sum'=>$sum,
            'coupons'=>$coupons,
            'couponList'=>$couponList,
        ]);
    }
}
