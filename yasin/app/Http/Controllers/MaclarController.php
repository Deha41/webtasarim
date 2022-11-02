<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\maclar;

class MaclarController extends Controller
{
    public function mac(){
        $mac = maclar::where('mac_hakem1', $istek->mac_hakem1)->where('mac_hakem2', $istek->mac_hakem1)->where('mac_hakem3', $istek->mac_hakem3)->where('mac_gozlemci', $istek->macgozlemci)->get();
        session(["mac_hakem1" => $mac->first()->mac_hakem1]);
        session(["mac_hakem2" => $mac->first()->mac_hakem2]);
        session(["mac_hakem3" => $mac->first()->mac_hakem3]);
        session(["mac_gozlemci" => $mac->first()->mac_gozlemci]);
       }
        

       
}
