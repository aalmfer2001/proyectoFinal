<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Distoalju</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-orange-100">

    <header class="bg-gray-800 text-white py-4 px-6 flex items-center justify-between">
        <h1 class="text-xl font-bold"><?php echo app('translator')->get('app.saludo'); ?>, <?php echo e(Auth::user()->name); ?>!</h1>
        <form action="<?php echo e(route("logout")); ?>" method="post">
            <?php echo csrf_field(); ?>
        <button class="bg-amber-700 hover:bg-amber-900 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"><?php echo app('translator')->get('app.logout'); ?></button>
    </form>
    </header>


        <div class=" grid place-items-center">
        <img class="w-60" src="<?php echo e(URL::asset('img/logo.png')); ?>" alt="">
        </div>
    <h1 class="text-center text-4xl font-bold">DISJUALTO</h1>
    <h2 class="text-center text-2xl font-bold"><?php echo app('translator')->get('app.subti'); ?></h2>

       
        <table class="text-center m-auto mt-5 bg-yellow-100 rounded-lg border-collapse separate border border-gray-400">
            <thead>
                <tr>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.nombre'); ?></th>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.tipo'); ?> </th>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.formato'); ?></th>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.peso'); ?></th>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.descripcion'); ?></th>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.editar'); ?></th>
                    <th class="border border-gray-400 p-3"><?php echo app('translator')->get('app.borrar'); ?></th>
                </tr>
            </thead>
            <tbody>
        <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <tr>

                    <td class="border border-gray-400 p-3"><?php echo e($item->nomPro); ?></td>
                    <td class="border border-gray-400 p-3"><?php echo e($item->tipoPro); ?></td>
                    <td class="border border-gray-400 p-3"><?php echo e($item->formatoPro); ?></td>
                    <td class="border border-gray-400 p-3"><?php echo e($item->pesoPro); ?> Kg</td>
                    <td class="border border-gray-400 p-3"><?php echo e($item->descPro); ?></td>
                    <td class="border border-gray-400 p-3"><a class="bg-rose-300 hover:bg-rose-500 text-white font-bold py-2 px-4 rounded" href="<?php echo e(route("producto.editar", $item->idPro)); ?>"><?php echo app('translator')->get('app.editar'); ?></a></td> 
                    <td class="border border-gray-400 p-3"><a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"  href="<?php echo e(route("producto.borrar", $item->idPro)); ?>"><?php echo app('translator')->get('app.borrar'); ?></a></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
    </table>

    <div class="flex items-center justify-center">
        <div class=" w-64 h-64 flex items-center justify-center rounded-lg">
            <a class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded" href="<?php echo e(route("producto.crear")); ?>"><?php echo app('translator')->get('app.crear'); ?></a>
        </div>
      </div>



    
    </div>



</body>
</html><?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views/productos/main.blade.php ENDPATH**/ ?>