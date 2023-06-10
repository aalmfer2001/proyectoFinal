

<?php $__env->startSection("main"); ?>

    <div class="bg-orange-100 w-full max-w-md mx-auto">

        <form class="bg-yellow-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?php echo e(route("etiquetaPers.guardarEdicion", $etiquetaPersUpdate->idEtiq)); ?>" method="post">

            <?php echo csrf_field(); ?>
            <h1 class="mb-4 text-center text-4xl font-bold">Modificar Etiqueta</h1>
            <label>Nombre de la tienda</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nomTienEtiq" required value="<?php echo e($etiquetaPersUpdate->nomTienEtiq); ?>" required/>
            <br>
            <label>Localidad de la tienda</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localiTienEtiq" required value="<?php echo e($etiquetaPersUpdate->localiTienEtiq); ?>" required/>
            <br>
            <label>Numero de telefono</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="numTelfTienEtiq" required value="<?php echo e($etiquetaPersUpdate->numTelfTienEtiq); ?>" required/>
            <br>
        
            <div class="flex items-center justify-center">
                <div class=" w-64 h-64 flex items-center justify-center rounded-lg">
                    <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded"><?php echo app('translator')->get('app.guardarCambio'); ?></button>
                </div>
              </div>
        
           </form>

    </div>
   

   <?php if($errors->any()): ?>
    <?php echo e($errors->first("numero")); ?>

   <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views/etiquetasPers/editar.blade.php ENDPATH**/ ?>