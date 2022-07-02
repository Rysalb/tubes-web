@extends('partials.navbar')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style/profile.css" />
    <title>Profile</title>
  </head>
  <body>
   <div class="container">
    <div class="card">
        <img src="images/{{ $image }}" alt="gambar tidak ada" />
        <h1>{{ $name }}</h1>
        <p class="title">{{ $role }}</p>
        <p>{{ $email }}</p>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button>Contact</button></p>
      </div>
   </div>
    
  </body>
</html>
