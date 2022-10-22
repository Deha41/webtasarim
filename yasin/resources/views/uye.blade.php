@extends('tema')
@section('body')

    <center>
        <div class="conteiner1">
            <div class="form" >
                
                    <form action="{{route('ekle')}}"  method="post">
                        @csrf
                        <div class="giris-form">
                             <span>Kullanıcı Adını</span>
                            <input type="text" placeholder="Kullanıcı Adı" name="kullaniciadi">
                        </div>
                        <div class="giris-form">
                            <span>Soyad</span>
                            <input type="text" placeholder="Adres" name="kullanicisoyad">
                        </div>
                        <div class="giris-form">
                            <span>Şifre</span>
                            <input type="text" placeholder="Şifre" name="sifre">
                        </div>
                        <div class="giris-form">
                            <span>Mail</span>
                            <input type="text" placeholder="Mail" name="mail">
                        </div>
                        <div class="giris-form">
                            <span>Telefon</span>
                            <input type="text" placeholder="Telefon" name="telefon">
                        </div>
                        <div class="giris-form">
                            <span>Klasman</span>
                                <select name="cars" id="klasmann">
                                <option value="Aday">Aday</option>
                                <option value="İl">İl</option>
                                <option value="Bolgesel">Bolgesel</option>
                                <option value="Clasman">Clasman</option>
                                </select>
                        </div>
                        <div class="giris-form">
                            <span>Mesleği</span>
                            <input type="text" placeholder="Telefon" name="meslek">
                        </div>
                        <div class="giris-gönder">
                            <input type="submit" value="Kayıt Ol">
                        </div>
                    </form>
            </div>
        </div>   
    </center>
@endsection('body')                
