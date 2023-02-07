<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;
use Carbon\Carbon;
class AdminEditProductComponent extends Component
{
    public $product_id;
    public function mount($product_id)
    {
        // $product= Item::find($product_id);
        $this->product_id= $product_id;
    }
    public function updateProduct()
    {

    }
    public function render()
    {
        $product= Item::where('id',$this->product_id)->first();
        return view('livewire.admin.admin-edit-product-component',[
            'product' => $product,
        ]);
    }
}
