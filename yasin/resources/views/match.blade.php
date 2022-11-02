@extends('tema')
@section('body')
<?php 
         $maclar=App\Models\maclar::where('mac_hakem1' , session("kullaniciid"))->orWhere('mac_hakem2',session('kullaniciid'))->orWhere('mac_hakem3',session('kullaniciid'))->orWhere('mac_gozlemci',session('kullaniciid'))->orWhere('maclar_id',session('maclar_id'))->get();
         
         
       
        ?>
<div class="hakembilgi">
@foreach ($maclar as $mac)
                    <div class="container mt-5 d-flex justify-content-center" >
                        <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ORTA HAKEM</li>
                                <li class="list-group-item"><?php echo App\Models\kullanici::where('kullaniciid' , $mac->mac_hakem1)->first()->kullaniciad; ?></li>
                                <li class="list-group-item">1. YARDIMCI</li>
                                <li class="list-group-item"><?php echo App\Models\kullanici::where('kullaniciid' , $mac->mac_hakem2)->first()->kullaniciad; ?></li>
                                <li class="list-group-item">ORTA HAKEM</li>
                                <li class="list-group-item"><?php echo App\Models\kullanici::where('kullaniciid' , $mac->mac_hakem3)->first()->kullaniciad; ?></li>
                                <li class="list-group-item">ORTA HAKEM</li>
                                <li class="list-group-item"><?php echo App\Models\kullanici::where('kullaniciid' , $mac->mac_gozlemci)->first()->kullaniciad; ?></li>
                                <li class="list-group-item">maç id</li>
                                <li class="list-group-item"><?php echo App\Models\maclar::where('maclar_id' , $mac->maclar_id)->first()->maclar_id; ?></li>
                               
                                <a href="{{route('rapor-duzenle',$mac->maclar_id)}}"> düzenle</a>
                               
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    
              
</div>
@endsection('body')