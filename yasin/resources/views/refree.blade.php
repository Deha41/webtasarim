@extends('tema')
@section('body')

    <?php
    
$mac=App\Models\kullanici::where('kullaniciid', session("kullaniciid"))->first();
    if (session("key") == 1){ ?>
    <div class="conteiner1">
        <div class="bilgi">
             <img src="{{asset('picture/img_avatar3.png')}}" alt="">
                 <div class="hakembilgi">
                    <table class="bilgi2">
                     <tr>
                     <th>Adı   :  </th>
                     <td><?php echo $mac->kullaniciad; ?></td>
                     </tr>
                     <tr>
                     <th>Soyadı:</th>
                     <td><?php echo $mac->kullanicisoyad; ?></td>
                     </tr>
                    <tr>
                    <th>Mesleği:</th>
                    <td>Öğrenci</td>
                    </tr>
                    <tr>
                    <th>Telefon:</th>
                    <td><?php echo $mac->kullanicitelefon; ?></td>
                    </tr>
                    <tr>
                    <th>Email:</th>
                    <td><?php echo $mac->kullanicimail; ?></td>
                    </tr>
                    <tr>
                    <th>Clasman:</th>
                    <td><?php echo $mac->kullaniciclasman; ?></td>
                    </tr>
                    </table>
              
                 </div>
        </div>
            <div class="islemler">
                <button class="mazeret" type="button">Mazeret Girişi</button>
                <button class="mazeret" type="button">Raporlar</button>
                <button class="mazeret" type="button">Müsabaka</button>
            </div>

    </div>
    <?php } ?>
    @endsection('body')