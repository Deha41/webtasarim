@extends('tema')
@section('body')

    <?php if (session("kullaniciad")){ ?>
    <div class="conteiner1">
        <div class="bilgi">
             <img src="{{asset('picture/img_avatar3.png')}}" alt="">
                 <div class="hakembilgi">
                    <table class="bilgi2">
                     <tr>
                     <th>Adı   :  </th>
                     <td><?php echo session("kullaniciad"); ?></td>
                     </tr>
                     <tr>
                     <th>Soyadı:</th>
                     <td><?php echo session("kullanicisoyad"); ?></td>
                     </tr>
                    <tr>
                    <th>Mesleği:</th>
                    <td>Öğrenci</td>
                    </tr>
                    <tr>
                    <th>Telefon:</th>
                    <td><?php echo session("kullanicitelefon"); ?></td>
                    </tr>
                    <tr>
                    <th>Email:</th>
                    <td><?php echo session("kullanicimail"); ?></td>
                    </tr>
                    <tr>
                    <th>Clasman:</th>
                    <td><?php echo session("kullaniciclasman"); ?></td>
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