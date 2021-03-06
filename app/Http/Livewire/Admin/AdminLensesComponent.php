<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lense;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use App\Imports\UsersImport;
use App\Exports\LensesExport;
use Livewire\WithFileUploads;

class AdminLensesComponent extends Component
{
    use WithFileUploads;
    public $ids = [];

    public $file;
    public function upload()
    {
        $this->validate([

            'file' => 'required|file|mimes:xls,xlsx|max:204800',

        ]);
        Excel::import(new UsersImport, $this->file);
        session()->flash('message', 'Excel Data Imported successfully.');
    }

    public function export() 
    {
        return Excel::download(new LensesExport, 'lenses.xlsx');
    }

    public function deleteLens($id)
    {

        $lens = Lense::find($id);
        $lens->delete();
        session()->flash('message', 'Lens has been delete successfully!');
    }

    public function deleteLenses()
    {

        Lense::whereKey($this->ids)->delete();
        $this->ids = [];
        session()->flash('message', 'Lenses has been delete successfully!');
    }

    public function render()
    {
        if (auth()->user()->utype === "ADM")
            $lenses = Lense::all();
        else if (auth()->user()->utype === "IMP")
            $lenses = Lense::where('user_id', auth()->user()->id)->get();
        return view('livewire.admin.admin-lenses-component', ['lenses' => $lenses])->layoutData(['title' => 'lenses']);
    }
}
