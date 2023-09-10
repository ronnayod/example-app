<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>admin</title>
</head>
<body>
              <?php

              $user = "Ronnayod";
              $arr = array("Home","Member","About");

              ?>
              
              @if($user == "Ronnayod")
                            <h1>ยินดีต้อนรับแอดมิน</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem iure, mollitia quis a nemo laborum, esse sit architecto animi iste rerum vero consequatur tenetur aspernatur fugit quisquam obcaecati, facere nisi?</p>
                            <h2>{{$user}}</h2>

              @else
              <h2>ผู้ใช้ท่านนี้ไม่เป็น Admin</h2>              
              @endif


              @foreach ($arr as $menu)
                            <a href="">{{$menu}}</a>                  
              @endforeach

              
              <ul>
              @for($i=1;$i<=5;$i++)
                            <li>{{$i}}</li>
              @endfor
              </ul>
            
</body>
</html>