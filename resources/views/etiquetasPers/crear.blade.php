@extends("layouts.app")

@section("main")

    <div class="bg-orange-100 w-full max-w-md mx-auto">

        

        <form class="bg-yellow-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route("etiquetaPers.guardar") }}" method="post">
            <h1 class="mb-4 text-center text-4xl font-bold">@lang('app.crearEtiqueta') </h1>
            @csrf
            <label>@lang('app.labelEtiquetaNombre')</label>
            <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nomTienEtiq" required />
            <br>
            <label>@lang('app.labelEtiquetaLocalidad')</label>
            <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localiTienEtiq" required />
            <br>
            <label>@lang('app.labelEtiquetaTelefono')</label>
            <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="numTelfTienEtiq" pattern="[0-9]{9}" required />
            <br>
            <div class="flex items-center justify-center">
                <div class=" w-64 h-64 flex items-center justify-center rounded-lg">
                    <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded">@lang('app.botonCrearEtiqueta')</button>
                </div>
              </div>
            
        
           </form>

    </div>
   

   @if ($errors->any())
    {{ $errors->first("numero") }}
   @endif

@endsection