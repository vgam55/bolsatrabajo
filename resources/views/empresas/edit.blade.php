<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Actualizar los datos de las empresa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
</head>
<body>
  <div class="container-fluid">
  
  <!-- Zona navegación general-->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarGeneral">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Alumnos</a>
          <a class="nav-item nav-link" href="#">Ofertas</a>
          <a class="nav-item nav-link" href="#">Empresas</a>
        </div>
    </div>
  </nav>
  <!-- Zona navegación particular para las empresas --> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavEmpresas">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Listado empresas</a>
          <a class="nav-item nav-link" href="#">Nueva Empresa</a>
        </div>
    </div>
  </nav>
  <!-- Zona navegación particular para las empresas --> 
  

    <div class="container bg-info text-center">
      Modificar datos de una empresa
    </div>
    <!-- Formulario para coger los datos de la empresa-->
    <form class="needs-validation" novalidate  action="{{action('EmpresasController@postCreate')}}" method="POST">
    
        {{ csrf_field() }}

        <div class="form-row">
          <!-- Nombre de la empresa-->
          <div class="col-md-4 mb-3">
            <label for="empresa">Nombre de la empresa</label>
            <input type="text" class="form-control" id="empresa" placeholder="Nombre de la empresa" required>
            
          </div>

          <!-- Correo electronico al que mandaremos los alumnos inscritos-->
          <div class="col-md-4 mb-3">
            <label for="Email">Correo Electronico</label>
            <input type="email" class="form-control" id="Email" placeholder="usuario@dominio.com"  required>
            <div class="valid-feedback">
              ¡Formato correcto!
            </div>
             <div class="invalid-feedback">
                Por favor, introduzca un correo electronico valido
             </div>
          </div>

          <!-- Persona con la que nos pondremos en contacto en relación a la oferta-->
          <div class="col-md-4 mb-3">

            <label for="responsable">Resposable</label>
            <div class="input-group">          
              <input type="text" class="form-control" id="responsable" placeholder="responsable de la empresa" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor, introduzca el nombre de la persona de contacto.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">

          <!-- Telefono de contacto-->
          <div class="col-md-12 mb-3">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" placeholder="Telefono de contacto" required>
            <div class="invalid-feedback">
              Por favor, introduzca un número de telefono de contacto.
            </div>
          </div>

          <button class="btn btn-primary" type="submit">Enviar</button>
  </form>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>