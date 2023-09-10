<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Adout us</title>
</head>
<body>
          
              <h1>เกี่ยวกับผู้พัฒนา</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis reprehenderit obcaecati in doloremque aut aperiam non harum veniam, eos repellendus?</p>
              
              <p>ที่อยู่ : {{$address}}</p>
              <p>เบอร์ติดต่อ : {{$tel}}</p>
              <p>อีเมล : {{$email}}</p>
           

              <a href="{{url('/')}}">Home</a>
              <a href="{{route('admin')}}">Admin</a>
              <a href="{{route('mem')}}">Member</a>
              <a href="{{route('about')}}">About</a>
</body>
</html>