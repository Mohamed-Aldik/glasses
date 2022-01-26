<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
class AdminEditCustomerComponent extends Component
{
    public $idd;
    public $name;
    public $email;
    public $phone;
    public $approved;

    public function mount($id)
    {
        
        $this->idd = $id;
        $customer=User::where('utype','USR')->find($id);
        if($customer){
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
        $this->approved = $customer->approved;
        }
        else
        return abort(404);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|string|max:255',
            'email' => 'required| unique:users,email,' . $this->idd,
            'phone' => 'required| digits_between:4,20 | unique:users,phone,' . $this->idd,
            'approved' => 'required',
        ]);
    }
    public function updateCustomer()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required| unique:users,email,' . $this->idd,
            'phone' => 'required| digits_between:4,20 | unique:users,phone,' . $this->idd,
            'approved' => 'required',
        ]);
        $customer=User::find($this->idd);
        $customer->name = $this->name;
        $customer->email = $this->email;
        $customer->phone = $this->phone;
        $customer->approved = $this->approved;
        $customer->save();
        session()->flash('message','Customer has been update successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-customer-component')->layoutData(['title' => 'Edit']);
    }
}
