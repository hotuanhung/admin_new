<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

use Livewire\WithPagination;
class AdminCouponComponent extends Component
{
    
    use WithPagination;
    public $coupon_id;
    // public function deleteUser($id)
    // {
    //     $delete_user = User::where('id', $id)->first();
    //     $delete_user->delete();
    //     session()->flash('message','Delete sucessfully!');
    // }
    public function render()
    {
        $coupons= Coupon::orderBy('id','ASC')->get(); 
        return view('livewire.admin.admin-coupon-component',[
            'coupons'=> $coupons
    ]);
    }
}
