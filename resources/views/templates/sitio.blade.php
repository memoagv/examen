<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php $route=Route::current()->uri(); ?>
   @if($route=='/')<?php $route="Veterinaria Blanca" ?>@endif
  @if($route=='registrar_usuario')<?php $route="Registrar Usuario" ?>@endif
   @if($route=='registrar_mascota')<?php $route="Registrar Mascota" ?>@endif
   @if($route=='administrador') <?php $route= "Bienvenido ". session()->get('administrador')->nombre ?>@endif
     @if($route=='acceder')<?php $route="Iniciar Sesion" ?>@endif
     


  <title>{{ $route }}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/materialize.min.css"/>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>

  @yield('content')

 <script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
  
</body>
</html>
