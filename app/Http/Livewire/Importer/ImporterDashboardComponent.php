<?php

namespace App\Http\Livewire\Importer;

use Livewire\Component;

class ImporterDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.importer.importer-dashboard-component')->layoutData(['title' => 'dashboard','head'=>'dashboard'])->layoutData(['title' => 'dashboard']);
    }
}
