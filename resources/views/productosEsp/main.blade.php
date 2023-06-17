<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DISJUALTO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/style.css'])
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
            <button class="boton-logout"><svg fill="#ffffff" width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.651 16.989h17.326c0.553 0 1-0.448 1-1s-0.447-1-1-1h-17.264l3.617-3.617c0.391-0.39 0.391-1.024 0-1.414s-1.024-0.39-1.414 0l-5.907 6.062 5.907 6.063c0.196 0.195 0.451 0.293 0.707 0.293s0.511-0.098 0.707-0.293c0.391-0.39 0.391-1.023 0-1.414zM29.989 0h-17c-1.105 0-2 0.895-2 2v9h2.013v-7.78c0-0.668 0.542-1.21 1.21-1.21h14.523c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-14.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.013 0.003v9.030c0 1.105 0.895 2 2 2h16.999c1.105 0 2.001-0.895 2.001-2v-28c-0-1.105-0.896-2-2-2z"></path> </g></svg></button>
        </form>
        
        </div>
    
        
      </div>
      <div>

        


        
    @if (Auth::user()->rol=="usuario")
    <div id="seccionTabla">
    <h1 class="text-center text-4xl font-bold">Encargos</h1>
    <h2 class="text-center text-2xl font-bold">Encarga un producto personalizado</h2>

       
        <table class="text-center m-auto mt-5 bg-marron separate text-white">
            <thead>
                <tr>
                    <th class="p-3">@lang('app.nombre')</th>
                    <th class="p-3">@lang('app.tipo') </th>
                    <th class="p-3">@lang('app.formato')</th>
                    <th class="p-3">@lang('app.descripcion')</th>
                    <th class="p-3">@lang('app.editar')</th>
                    <th class="p-3">@lang('app.borrar')</th>
                </tr>
            </thead>
            <tbody>
        @foreach ($datos as $item)
            
                <tr>

                    <td class="border border-gray-400 p-3">{{$item->nomProEsp}}</td>
                    <td class="border border-gray-400 p-3">{{$item->tipoProEsp}}</td>
                    <td class="border border-gray-400 p-3">{{$item->formatoProEsp}}</td>
                    <td class="border border-gray-400 p-3">{{$item->descProEsp}}</td>
                    <td class="border border-gray-400 p-3"><a class="" href="{{route("productoEsp.editar", $item->idProEsp)}}"><svg width="24px" height="24px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>edit [#1479]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -400.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M61.9,258.010643 L45.1,258.010643 L45.1,242.095788 L53.5,242.095788 L53.5,240.106431 L43,240.106431 L43,260 L64,260 L64,250.053215 L61.9,250.053215 L61.9,258.010643 Z M49.3,249.949769 L59.63095,240 L64,244.114985 L53.3341,254.031929 L49.3,254.031929 L49.3,249.949769 Z" id="edit-[#1479]"> </path> </g> </g> </g> </g></svg></a></td> 
                    <td class="border border-gray-400 p-3"><a class=""  href="{{route("productoEsp.borrar", $item->idProEsp)}}"><svg width="30px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#ffffff" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M45.49,54.87h-27a1,1,0,0,1-1-1l-2-36H48.46l-2,36A1,1,0,0,1,45.49,54.87Z"></path><path d="M51,17.86H13c-.28,0-.5-.16-.5-.35l.93-4.35a.49.49,0,0,1,.5-.3H50.07a.49.49,0,0,1,.5.3l.93,4.35C51.5,17.7,51.28,17.86,51,17.86Z"></path><line x1="24" y1="23.44" x2="24" y2="48.44"></line><line x1="32" y1="23.44" x2="32" y2="48.44"></line><line x1="40" y1="23.44" x2="40" y2="48.44"></line><path d="M25.73,12.86V7.57a1,1,0,0,1,1-1H37.27a1,1,0,0,1,1,1v5.29"></path></g></svg></a></td>
                </tr>
        @endforeach
            </tbody>
    </table>

    <div class="flex items-center justify-center">
        <div class=" w-64 h-64 flex items-center justify-center rounded-lg">
            <a class="bg-marron-claro hover:bg-amber-700 text-white font-bold py-2 px-4 rounded" href="{{route("productoEsp.crear")}}">@lang('app.crear')</a>
        </div>
      </div>
@endif 
</div>

    
@if (Auth::user()->rol=="admin")
<div id="seccionTabla">
<h1 class="text-center text-4xl font-bold titulo">Encargos</h1>
<h2 class="text-center text-2xl font-bold titulo">Encarga un producto personalizado</h2>

   
    <table class="text-center m-auto mt-5 bg-marron separate text-white">
        <thead>
            <tr>
                <th class="p-3">Id del usuario</th>
                <th class="p-3">@lang('app.nombre')</th>
                <th class="p-3">@lang('app.tipo') </th>
                <th class="p-3">@lang('app.formato')</th>
                <th class="p-3">@lang('app.descripcion')</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($datosAdmin as $itemAdmin)
        
            <tr>
                <td class="border border-gray-400 p-3">{{$itemAdmin->idUsu}}</td>
                <td class="border border-gray-400 p-3">{{$itemAdmin->nomProEsp}}</td>
                <td class="border border-gray-400 p-3">{{$itemAdmin->tipoProEsp}}</td>
                <td class="border border-gray-400 p-3">{{$itemAdmin->formatoProEsp}}</td>
                <td class="border border-gray-400 p-3">{{$itemAdmin->descProEsp}}</td>
            </tr>
    @endforeach
        </tbody>
</table>


@endif 
</div>



    




</body>
</html>