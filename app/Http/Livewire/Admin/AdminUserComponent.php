<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

use Livewire\WithPagination;

class AdminUserComponent extends Component
{
    use WithPagination;
    public $user_id;
    // public function deleteUser()
    // {
    //     $item=Item::find($this->product_id);
    //     $item->delete();
    //     session()->flash('message','Product has been deleted!');
    // }
    public function render()
    {
        $user= User::where('type','1')->orderBy('id','ASC')->paginate(10); 
        $totalUser= User::where('type','1')->count();

        return view('livewire.admin.admin-user-component',[
            'user'=> $user,
            'totalUser'=> $totalUser,
    ]);
    }
}
