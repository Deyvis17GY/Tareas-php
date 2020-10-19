<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title>App Task</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div id="mensaje" class="text-center alert alert-primary" style="display:none"></div>
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark header">
        <a href="#" id="titulo" class="col-md-6 navbar-brand">Aplicacion de Tareas</a>
        <ul id="form" class="navbar-var ml-auto">
          <form id="form2" class="form-inline my-2 my-lg-0">
            <input type="search" id="search" class="form-control mr-sm-2 mb-0 " placeholder="Buscar Tarea">
            <button id="buscar" type="submit" class="btn btn-success my-2 my-sm-0 ">Buscar</button>
          </form>
        </ul>
    </nav>

    <div class="container p-4">
      <div class="row">
        <div class="col-md-5 my-2">
          <div class="card">
            <div class="card-body">
              <form  id="task-form">
                <input type="hidden" id="task-id">

                <div class="form-group">
                  <input type="text" id="name" class="form-control" placeholder="Nombre de Tarea">
                </div>
                <div class="form-group">
                  <textarea name="" id="description" cols="30" rows="10" class="form-control" placeholder="Describa tarea"></textarea>
                </div>
                <button type="submit" id="Guardar" class="btn btn-primary btn-block text-center">Guardar Tarea</button>
              </form>
            </div>
          </div>
        </div>


      <div class="col-md-6 my-2 mx-1">
        <div class="card my-4" id="task-result">
          <div class="card-body">
            <ul id="container"></ul>
          </div>
        </div>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <td>ID</td>
              <td>Nombre</td>
              <td>Descripcion</td>
              <td>Hora</td>
              <td>Eliminar</td>
            </tr>
          </thead>
          <tbody id="tasks">

          </tbody>
        </table>
      </div>
    </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>
    <script src="app.js" charset="utf-8"></script>
  </body>
</html>
