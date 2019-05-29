<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div class="container" id="app-login">
      <div class="col-md-4 offset-md-4 mt-5">
        <h1 class="my-3 text-center">Iniciar Sesión</h1>
        <div class="card">
          <div class="card-body">
            <form id="formulario-login">
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="email" class="form-control" id="usuario" v-model="usuario">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" v-model="password">
          </div>
          <button type="button" class="btn btn-primary" @click="iniciarSesion">Enviar</button>
        </form>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
