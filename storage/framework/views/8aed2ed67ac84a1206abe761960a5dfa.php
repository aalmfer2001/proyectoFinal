

<?php $__env->startSection("main"); ?>

    <div class="bg-orange-100 w-full max-w-md mx-auto">

        <form class="bg-yellow-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?php echo e(route("producto.guardarEdicion", $productoUpdate->idPro)); ?>" method="post">

            <?php echo csrf_field(); ?>
            <h1 class="mb-4 text-center text-4xl font-bold"><?php echo app('translator')->get('app.modificar'); ?></h1>
            <label><?php echo app('translator')->get('app.nombre'); ?></label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nomPro" required value="<?php echo e($productoUpdate->nomPro); ?>" required/>
            <br>
            <label><?php echo app('translator')->get('app.tipo'); ?></label>
            <select  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tipoPro" value="<?php echo e($productoUpdate->tipoPro); ?>" required>
                <option value="Con azucar">Con Azucar</option>
                <option value="Sin azucar">Sin Azucar</option>
                <option value="Con edulcorante">Con edulcorante</option>
            </select>
            <br>
            <label><?php echo app('translator')->get('app.formato'); ?></label>
            <select  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="formatoPro" value="<?php echo e($productoUpdate->formatoPro); ?>"  required>
                <option value="Envuelto">Envuelto</option>
                <option value="Granel">Granel</option>
                <option value="Blister">Blister</option>
            </select>
            <br>
            
            <label>precio</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="precioPro" value="<?php echo e($productoUpdate->precioPro); ?>" required/>
            <br>

            <label>Imagen</label>
            <input  class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="imgPro" value="<?php echo e($productoUpdate->imgPro); ?>" required/>
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
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views/productos/editar.blade.php ENDPATH**/ ?>