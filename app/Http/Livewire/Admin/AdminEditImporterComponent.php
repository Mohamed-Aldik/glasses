<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminEditImporterComponent extends Component
{
    
    public $idd;
    public $name;
    public $email;
    public $phone;
    public $approved;

    public function mount($id)
    {
        
        $this->idd = $id;
        $customer=User::where('utype', 'IMP')->find($id);
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
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|unique:users|digits_between:4,20',
            'approved' => 'required',
        ]);
    }
    public function updateCustomer()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|unique:users|digits_between:4,20',
            'approved' => 'required',
        ]);
        $customer=User::find($this->idd);
        $customer->name = $this->name;
        $customer->email = $this->email;
        $customer->phone = $this->phone;
        $customer->approved = $this->approved;
        $customer->save();
        session()->flash('message', 'Customer has been update successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-importer-component')->layoutData(['title' => 'Edit']);
    }
}
