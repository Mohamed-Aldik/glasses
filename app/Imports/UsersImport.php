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
        return new Lense([
        'company'  => $row['0'],
         'lens_name'   => $row['1'],
         'sph'   => $row['2'],
         'cyl'    => $row['3'],
         'index'  => $row['4'],
         'lens_option'   => $row['5'],
         'regular_price'   => $row['6'],
         'wholesale_price'   => $row['7'],
        ]);
    }
}
