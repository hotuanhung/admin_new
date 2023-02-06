<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

use Livewire\WithPagination;

class AdminUserComponent extends Component
{
    use WithPagination;
    public $user_id;
    public function deleteUser($id)
    {
        $delete_user = User::where('id', $id)->first();
        $delete_user->delete();
        session()->flash('message','Delete sucessfully!');
    }
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
