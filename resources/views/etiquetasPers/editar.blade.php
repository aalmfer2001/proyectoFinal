@extends("layouts.app")

@section("main")

    <div class="bg-orange-100 w-full max-w-md mx-auto">

        <form class="bg-yellow-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route("etiquetaPers.guardarEdicion", $etiquetaPersUpdate->idEtiq) }}" method="post">

            @csrf
            <h1 class="mb-4 text-center text-4xl font-bold">Modificar Etiqueta</h1>
            <label>Nombre de la tienda</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nomTienEtiq" required value="{{$etiquetaPersUpdate->nomTienEtiq}}" required/>
            <br>
            <label>Localidad de la tienda</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localiTienEtiq" required value="{{$etiquetaPersUpdate->localiTienEtiq}}" required/>
            <br>
            <label>Numero de telefono</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="numTelfTienEtiq" required value="{{$etiquetaPersUpdate->numTelfTienEtiq}}" required/>
            <br>
        
            <div class="flex items-center justify-center">
                <div class=" w-64 h-64 flex items-center justify-center rounded-lg">
                    <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded">@lang('app.guardarCambio')</button>
                </div>
              </div>
        
           </form>

    </div>
   

   @if ($errors->any())
    {{ $errors->first("numero") }}
   @endif

@endsection