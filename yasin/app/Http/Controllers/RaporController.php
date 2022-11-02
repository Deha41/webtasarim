<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rapor;
use App\Models\maclar;

class RaporController extends Controller
{
    public function raporyukle(Request $istek){
       $raporadi=$istek->rapor->getClientOriginalName();
       $yukle=$istek->rapor->move(public_path('raporlar'),$raporadi);
        $mac=maclar::find($maclar_id);
        $mac->mac_rapor=$raporadi;

            
        


    }
}
