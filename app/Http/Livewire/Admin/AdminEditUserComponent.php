<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
class AdminEditUserComponent extends Component
{
    public $user_id;
    
    public function mount($user_id)
    {
        // $product= Item::find($product_id);
        $this->user_id= $user_id;
    }
    public function updateUser()
    {

    }
    public function render()
    {   
        $user= User::where('id',$this->user_id)->first();
        return view('livewire.admin.admin-edit-user-component',[
            'user' => $user,
        ]);
    }
}
