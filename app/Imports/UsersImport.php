<?php

namespace App\Imports;

use App\Models\Lense;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        $schedule = Lense::where('company', $row['0'])->where('lens_name', $row['1'])->where('sph', $row['2'])->where('cyl', $row['3'])->where('index', $row['4'])->where('lens_option', $row['5'])->where('regular_price', $row['6'])->where('wholesale_price', $row['7'])->where('user_id', auth()->user()->id)->first();
        if( !$schedule){
        return new Lense([
        'company'  => $row['0'],
         'lens_name'   => $row['1'],
         'sph'   => $row['2'],
         'cyl'    => $row['3'],
         'index'  => $row['4'],
         'lens_option'   => $row['5'],
         'regular_price'   => $row['6'],
         'wholesale_price'   => $row['7'],
         'user_id' => auth()->user()->id
        ]);}
        else
        {
            return;
            
        }
    
    
    }
}
