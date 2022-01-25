<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
class AdminCustomerComponent extends Component
{
    public function deleteCustomer($id)
    {
        $customer = User::find($id);
        $customer->delete();
        session()->flash('message', 'User has been delete successfully!');
    }

    public function render()
    {
        $customers=User::where('utype', 'USR')->select('id','name','phone','email','approved')->orderBy('approved', 'ASC')->get();
        return view('livewire.admin.admin-customer-component',['customers'=>$customers])->layoutData(['title' => 'Customer']);
    }
}
