<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Ofertas para <?php echo e(auth()->user()->name); ?></span>
                    
                </div>

                <div class="card-body pt-4">      
                    <table class="table pt-4">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Oferta</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Codigo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $oferta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <td><?php echo e($item->nombre); ?></td>
                                <td><?php echo e($item->descripcion); ?></td>
                                <td><?php echo app\Http\Controllers\UsuarioController::generarCodigo('6');?></td>
                                <td><a href="misOfertas"  class="btn btn-success btn-sm">guardar Oferta
                                </td>
                                <td>
                                <form action="<?php echo e(route('ofertas.eliminar', $item)); ?>" class="d-inline" method="POST">
                                @method('DELETE')
                                
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form> 
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($oferta->links()); ?>

                
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>