@extends("layouts.app")

@section("main")

    <div class="bg-orange-100 w-full max-w-md mx-auto">

        

        <form class="bg-yellow-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route("producto.guardar") }}" method="post">
            <h1 class="mb-4 text-center text-4xl font-bold">@lang('app.tituloProductoCrear')</h1>
            @csrf
            <label>@lang('app.nombre')</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nomPro" required/>
            <br>
            <label>@lang('app.tipo')</label>
            <script>
                $(document).ready(function() {
                    var tipoPro = ["con azucar", "sin azucar", "con edulcorante"];
            
                    $.each(tipoPro, function(index, value) {
                        $("#tipoPro").append(new Option(value, value));
                    });
                });
            </script>
            <select  id="tipoPro" class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tipoPro"required>
                <option selected disabled readonly>Escoge un tipo</option>
                
            </select>
            <br>
            <label>@lang('app.formato')</label>
            <script>
                $(document).ready(function() {
                    var formatoPro = ["Envuelto", "Granel", "Blister"];
            
                    $.each(formatoPro, function(index, value) {
                        $("#formatoPro").append(new Option(value, value));
                    });
                });
            </script>
            <select  id="formatoPro" class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="formatoPro"  required>
                <option selected disabled readonly>Escoge un formato</option>
            </select>
            <br>
            
            <label>@lang('app.precio')</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="precioPro" required/>
            <br>

            <label>@lang('app.imagen')</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="imgPro" required/>
            <br>
        
            <div class="flex items-center justify-center">
                <div class=" w-64 h-64 flex items-center justify-center rounded-lg">
                    <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded">@lang('app.crear')</button>
                </div>
              </div>
        
           </form>

    </div>
   

   @if ($errors->any())
    {{ $errors->first("numero") }}
   @endif

@endsection