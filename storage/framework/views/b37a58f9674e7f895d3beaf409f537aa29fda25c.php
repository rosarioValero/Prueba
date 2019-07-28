<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                            <?php $__currentLoopData = $misOfertas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <td><?php echo e($item->nombre); ?></td>
                                <td><?php echo e($item->descripcion); ?></td>
                                <td><button id="mi-boton" class="btn btn-success">ppj194</button></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($misOfertas->links()); ?>

                
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>