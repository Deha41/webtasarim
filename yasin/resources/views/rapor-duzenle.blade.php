@extends('tema')
@section('body')
<div class="container mt-5 d-flex justify-content-center" >
    <form action="{{route('rapor-duzenle-post',$raporduzenle->maclar_id)}}" method="post">
        @csrf
         <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ORTA HAKEM</li>
                <li class="list-group-item">{{raporduzenle->mac_hakem1}}</li>
                <li class="list-group-item">1. YARDIMCI</li>
                <li class="list-group-item">{{raporduzenle->mac_hakem2}}</li>
                <li class="list-group-item">ORTA HAKEM</li>
                <li class="list-group-item">{{raporduzenle->mac_hakem3}}</li>
                <li class="list-group-item">ORTA HAKEM</li>
                <li class="list-group-item">{{raporduzenle->mac_gozlemci}}</li>
                <li class="list-group-item">maç id</li>
                <li class="list-group-item"></li>
            </ul>
        </div>
</div>
@endsection('body')