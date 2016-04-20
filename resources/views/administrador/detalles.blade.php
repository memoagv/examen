@extends('templates.sitio')
@section('content')
<section id="seccion" class="container">  
<h1 id="titulo">    Detalles de la mascota</h1>
 <a href="registrar_usuario">
      <div id="divalin" class="row">
        <center>
         <table class="striped">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="nombre">NOMBRE</th>
              <th data-field="edad">EDAD</th>
              <th data-field="tipo">TIPO</th>
              <th data-field="color">COLOR</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$mascota->id}}</td>
            <td>{{$mascota->nombre}}</td>
            <td>{{$mascota->edad}}</td>
             <td>{{$mascota->tipo}}</td>
            <td>{{$mascota->color}}</td>
          </tr>
          
        </tbody>
      </table>

      <div  class="row">
        <div id="btn" >
          

      <a href="/registrar_mascota">
          <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Regresar</button>
      </a>
  
  
        </div>
      </div>


</center>
      </div>
      </a>
  </section>
</body>
</html>
@stop