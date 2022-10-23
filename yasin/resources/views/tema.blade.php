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
              <li><a href="/uye/refree">Profil</a></li>
              
              <li><a href="/uye/maclar">Maclar</a></li>
              <li><a href="/uye/raporlar">Raporlar</a></li>
              <li><a href="/dosyalar">Dosyalar</a></li>
              <li> 
                @if (sizeof($kullanici) == 1)

                @endif
   
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