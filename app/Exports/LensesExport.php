<?php

namespace App\Exports;

use App\Models\Lense;
use Maatwebsite\Excel\Concerns\FromCollection;

class LensesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lense::select('company', 'lens_name','sph','cyl','index','lens_option','regular_price','wholesale_price')->get();
    }
}
