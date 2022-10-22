<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    
</head>
<body>
    <div class="menu">
        <div class="logo">
            <img src="{{asset('picture/tff02.png')}}" class="logo">
        </div>
    
    
            <ul>
              <li>Profil</li>
              <li>Maçlar</li>
              <li>Raporlar</li>
              <li>Dosyalar <a href="/doyalar"></a></li>
              <li><a href="/cikis"> cikis</a>
              <?php if (session("kullaniciad")){
                            echo "Cikis";
                            
                        }else{

                        return view("/welcome");
                             }
                         ?>
                         </li>
            </ul>
    </div>
    <center>
    
        @yield("body")   
    </center>
    <footer>
        <div class="footer"></div>
    </footer>
    
</body>
</html>