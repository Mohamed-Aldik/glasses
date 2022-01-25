<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminImporterComponent extends Component
{
    public function deleteImporter($id)
    {
        $importer = User::find($id);
        $importer->delete();
        session()->flash('message', 'Importer has been delete successfully!');
    }

    public function render()
    {
        $importers=User::where('utype', 'IMP')->select('id','name','phone','email','approved')->orderBy('approved', 'DESC')->get();
        return view('livewire.admin.admin-importerer-component',['importers'=>$importers])->layoutData(['title' => 'Importer']);
    }
}


