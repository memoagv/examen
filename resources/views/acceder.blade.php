@extends('templates.sitio')
@section('content')
<section id="seccion" class="container">   
<h1>Inicio de Sesion</h1> 
 <div id="alin" class="row"> 
    <div class="col s12">
   

          @if(Session::has('error'))
            <p class="error">Usuario no encontrado</p>
          @endif 

         <form action="/log" class="col s12" method="post">
         {{ csrf_field() }}
         

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

       <div id="divalin2" class="row">
        <div id="btn" >
          <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesion
 
        </button>
        <a href="/">
       <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Regresar</button>
         </a>
  
  
        </div>
      </div>

      
         </form>
      
    </div>
  </div>
    </section>
@stop