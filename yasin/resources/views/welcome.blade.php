@extends('tema')
@section('body')
        <div class="conteiner1">
            <div class="form">
        
                 <form action="{{route('giris')}}" method="POST">
                     @csrf
                    <div class="giris-form">
                        <span>Kullanıcı Adını </span>
                        <input type="text" placeholder="Kullanıcı Adı" name="kadi">
                    </div>
                    <div class="giris-form">
                        <span>Şifre</span>
                        <input type="password" placeholder="Şifre" name="sifre">
                    </div>
                    <div class="giris-gönder">
                         <input type="submit" value="Gönder" >
                    </div>
                 </form>
            </div>
        </div>
 @endsection('body')
   

