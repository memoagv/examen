
@extends('templates.sitio')
@section('content')
<section id="seccion" class="container">    
<h1>Registro de Mascotas</h1>

<div id="alin" class="row">
    <form action="/mascotas" class="col s12" method="POST">
     {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s5">
          <input name="nombre"  id="nombre" type="text" class="validate">
          <label for="nombre">Nombre de mascota</label>
        </div>
      </div>

        <div class="row">
        <div class="input-field col s5">
          <input name="edad"  id="edad" type="text" class="validate">
          <label for="edad">Edad</label>
        </div>
      </div>

        <div class="row">
        <div class="input-field col s5">
          <input name="tipo"  id="tipo" type="text" class="validate">
          <label for="tipo">Tipo</label>
        </div>
      </div>

        <div class="row">
        <div class="input-field col s5">
          <input name="color"  id="color" type="text" class="validate">
          <label for="color">Color</label>
        </div>
      </div>
     

       <div  class="row">
        <div id="btn" >
          <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">Registrar</button>

      <a href="/administrador">
          <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Regresar </button>
      </a>
  
  
        </div>
      </div>

                <?php
                $mascota = DB::table('mascotas')->get();
                foreach ($mascota as $mascota)
                     echo "<li>
                            <a href='ver_detalles/$mascota->id'>  $mascota->nombre </a>
                            </li>"
                    
               ?>
    </form>
  </div>
   </section>

 @stop