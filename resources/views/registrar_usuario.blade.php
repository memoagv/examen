@extends('templates.sitio')
@section('content')
<section id="seccion" class="container">  
<h1>Registro de Usuario</h1>  

<div class="row" id="alin">
    <form action="/usuarios" class="col s12" method="POST">
     {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s5">
          <input name="nombre"  id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s5">
          <input name="email" id="email" type="email" class="validate">
        <label for="email">Email</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s5">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

       <div class="row">
        <div id="btn" >
          <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">Registrar
 
        </button>
         <a href="/">
          <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Regresar</button>
      </a>
  
  
        </div>
      </div>

     
     
    </form>
  </div>
   </section>

@stop