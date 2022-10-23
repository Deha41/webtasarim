@extends('tema')
@section('body')
        <div class="dosyalar">
            <div class="hakemdosya">
            <h2>Hakem</h2>
            <br>
            <a href="{{asset('file/2022-2023_hakem_bilgi_formu.xlsx')}}" download>Hakem Bilgi Formu</a>
            <br>
            <a href="{{asset('file/aday_hakem_basvuru_formu_2022.xls')}}" download>Adaya Hakem Bilgi Formu</a>
            <br>
            <a href="{{asset('file/musabaka_disiplin_raporu.xlsx')}}" download>Müsabaka Disiplin Raporu</a>
            <br>
            <a href="{{asset('file/musabaka_hakem_ek_raporu.docx')}}" download>Müsabaka Hakem Ek Raporu</a>
            <br>
            <a href="{{asset('file/musabaka_hakem_raporu.xlsx')}}" download>Müsabaka Hakem Raporu</a>
            <br>
            <a href="{{asset('file/futsal_hakem_raporu.xls')}}" download>Futsal Hakem Raporu</a>
            <br>
            </div>
            <div class="gozlemcidosya">
            
            <h2>GÖZLEMCİ</h2>
            <br>
            <a href="{{asset('file/il_gozlemci_raporu.xls')}}" download>İl Gözlemci Raporu</a>
            <br>
            <a href="{{asset('file/gozlemci_ek_raporu.doc')}}" download>Gözlemci Ek Raporu</a>
            <br>
            <a href="{{asset('file/gozlemci_disiplin_raporu.xls')}}" download>Gözlemci Ek Raporu</a>
            <br>
            <a href="{{asset('file/futsal_ligi_gozlemci_raporu.xlsx')}}" download>Futsal Gözlemci Raporu</a>
            </div>
        </div>


@endsection('body') 