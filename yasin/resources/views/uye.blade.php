<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="conteiner1">
            <div class="form" >
                
                    <form action="{{ route('iletisim-sonuc') }}"  method="post">
                        @csrf
                        <div class="giris-form">
                             <span>Kullanıcı Adını</span>
                            <input type="text" placeholder="Kullanıcı Adı" name="kullaniciadi">
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
                            <span>Adres</span>
                            <input type="text" placeholder="Adres" name="adres">
                        </div>

                        <div class="giris-gönder">
                            <input type="submit" value="Kayıt Ol">
                            
        
                        </div>
                    </form>
            </div>
        </div>   
                </center>
                
            </div>
    
</body>
</html>