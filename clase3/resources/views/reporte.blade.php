<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    @page {
    margin: 0cm 0cm;
    font-size: 1em;
}

body {
    margin: 3cm 2cm 2cm;
}

header {
    position: fixed;
    top: 0cm;
    left: 0cm;
    right: 0cm;
    height: 2cm;
    background-color: #46C66B;
    color: white;
    text-align: center;
    line-height: 30px;
}

footer {
    position: fixed;
    bottom: 0cm;
    left: 0cm;
    right: 0cm;
    height: 2cm;
    background-color: red;
    color: white;
    text-align: center;
    line-height: 35px;

}
</style>

<link>
    <meta charset="UTF-8">

    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     
</head>
<body style="text-align: center;">
<header>
    <br>
        <h4>
        TABLA DE PACIENTES 
        </h4>
</header>
   <br>
   <br>
    <div >
        <H5 style="text-align:center">TABLA DE PACIENTES</H5>
    <table class="table table-striped" border="2">

  <thead style="position: fixed;">
    
    <tr style="position: fixed;">
      <th scope="col">C.I</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Edad</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Departamento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Correo</th>
     
    </tr>
    
  </thead>
  
  <tbody style="position: fixed;">
    @foreach($pacientes as $paciente)
    <tr style="position: fixed;">
      <th scope="row">{{$paciente->ci_p}}</th>
      <th scope="row">{{$paciente->nombre_p}}</th>
      <th scope="row">{{$paciente->apellidos_p}}</th>
      <th scope="row">{{$paciente->edad_p}}</th>
      <th scope="row">{{$paciente->telefono_p}}</th>
      <th scope="row">{{$paciente->direccion_p}}</th>
      <th scope="row">{{$paciente->departamento_p}}</th>
      <th scope="row">{{$paciente->sexo_p}}</th>
      <th scope="row">{{$paciente->fechanac_p}}</th>
      <th scope="row">{{$paciente->correo_p}}</th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<footer>
    <h4>CONSULTORIO MEDICO "ESPAÑA" </h4>
</footer>

    
</body>
</html>