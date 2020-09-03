<?php

namespace App\Imports;

use App\Products;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProducts implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Products([
            'name'   => @$row[0], 
            'sku'    => @$row[2], 
            'stock'  => @$row[3],
            'cog'    => @$row[4],
            'price'  => @$row[5], 
            'lenght' => @$row[6],
            'width'  => @$row[7],
            'height' => @$row[8],
            'weight' => @$row[9],
            'fdw_sku'=> @$row[10],
            'colour_0' => @$row[11],
            'colour_1'=> @$row[12], 
            'colour_2'=> @$row[13],
            'asin_uk' => @$row[14],
            'asin_ca' => @$row[15],
            'asin_fr' => @$row[16],
            'asin_de' => @$row[17],
            'asin_es' => @$row[18],
            'asin_it' => @$row[19],
            'asin_ni' => @$row[20],
            'asin_se' => @$row[21],
            
        ]);
    }
}
