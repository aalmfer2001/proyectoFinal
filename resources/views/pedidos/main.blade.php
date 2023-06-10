<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DISJUALTO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/stylePedido.css'])
</head>
<body class="bg-crema">

    <div class="cabecera">
        <a class="enlaceCabecera" href="#">DISJUALTO</a>

        <div class="custom-links">
            <a href="{{route("home")}}">Inicio</a>
            <a href="{{route("etiquetaPers.listar")}}">Etiquetas</a>
            <a href="{{route("productoEsp.listar")}}">Encargos</a>
            <a href="{{route("producto.listar")}}">Productos</a>
            <a href="{{route("pedido.listar")}}">Mis Pedidos</a>
        </div>
        <div class="conjuntoLogin">
        <div class="user-info">
            <div class="svg">
                <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 16.3106 20.4627 18.6515 18.5549 19.8557L18.2395 18.878C17.9043 17.6699 17.2931 16.8681 16.262 16.3834C15.2532 15.9092 13.8644 15.75 12 15.75C10.134 15.75 8.74481 15.922 7.73554 16.4097C6.70593 16.9073 6.09582 17.7207 5.7608 18.927L5.45019 19.8589C3.53829 18.6556 3 16.3144 3 12ZM8.75 10C8.75 8.20507 10.2051 6.75 12 6.75C13.7949 6.75 15.25 8.20507 15.25 10C15.25 11.7949 13.7949 13.25 12 13.25C10.2051 13.25 8.75 11.7949 8.75 10Z" fill="#ffffff"></path> <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke="#ffffff" stroke-width="2"></path> <path d="M15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z" stroke="#ffffff" stroke-width="2"></path> <path d="M6 19C6.63819 16.6928 8.27998 16 12 16C15.72 16 17.3618 16.6425 18 18.9497" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> </g></svg>
            </div>          <p class="username">{{ Auth::user()->name }}</p>
        </div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="boton-login"><svg fill="#ffffff" width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.651 16.989h17.326c0.553 0 1-0.448 1-1s-0.447-1-1-1h-17.264l3.617-3.617c0.391-0.39 0.391-1.024 0-1.414s-1.024-0.39-1.414 0l-5.907 6.062 5.907 6.063c0.196 0.195 0.451 0.293 0.707 0.293s0.511-0.098 0.707-0.293c0.391-0.39 0.391-1.023 0-1.414zM29.989 0h-17c-1.105 0-2 0.895-2 2v9h2.013v-7.78c0-0.668 0.542-1.21 1.21-1.21h14.523c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-14.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.013 0.003v9.030c0 1.105 0.895 2 2 2h16.999c1.105 0 2.001-0.895 2.001-2v-28c-0-1.105-0.896-2-2-2z"></path> </g></svg></button>
        </form>
        
        </div>
    
        
      </div>
      <div class="contenedor">

    <h1 class="text-center text-4xl font-bold titulo">Mis pedidos</h1>
    <h2 class="text-center text-2xl font-bold titulo">Crea y visualiza tus pedidos</h2>

    <section class="section-container">
      <h2>Listado de Pedidos</h2>
      <div class="table-container">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Total</th>
              <th>Localidad</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datos as $datos)
            <tr>
              <td>{{ $datos->idPedido }}</td>
              <td>{{ $datos->totalPedi }}</td>
              <td>{{ $datos->localiPedi }}</td>
              <td>
                <a  class="action-link"href="{{route("pedido.visualizar", $datos->idPedido)}}">Ver</a>
                <a  class="action-link">Editar</a>
                <a  class="action-link" href="{{route("pedido.borrar", $datos->idPedido)}}">Borrar</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
    

    </div>



</body>
</html>