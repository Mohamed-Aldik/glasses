<?php

namespace App\Http\Livewire\Admin;
use App\Models\Lense;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use App\Imports\UsersImport;
use Livewire\WithFileUploads;
class AdminLensesComponent extends Component
{
    use WithFileUploads;

    public $file;
    public function upload()
    {
        $this->validate([

            'file' =>'required|file|mimes:xls,xlsx|max:204800',

        ]);
        Excel::import(new UsersImport, $this->file);
        session()->flash('message', 'Excel Data Imported successfully.');
    }

    public function deleteLens($id)
    {
        $lens = Lense::find($id);
        $lens->delete();
        session()->flash('message', 'Lens has been delete successfully!');
    }

    public function render()
    {
      
        $lenses=Lense::all();
        return view('livewire.admin.admin-lenses-component',['lenses'=>$lenses])->layoutData(['title' => 'lenses']);
    }
}
