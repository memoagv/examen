<?php session_start()?>
@extends('templates.sitio')
@section('content')
<section id="seccion" class="container"> 

<h1>Panel del Administrador {{session()->get('administrador')->nombre}}</h1>
 <a href="/registrar_mascota">
      <div id="divalin" class="row">
        <div id="btn" >
          <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Registrar Mascota
        </button>

          <a href="/logout">
      <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Salir</button>
      </a>
  
        </div>
      </div>
      </a>

    </section>
	
@stop