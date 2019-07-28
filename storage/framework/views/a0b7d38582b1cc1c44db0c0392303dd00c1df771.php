<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Oferta</span>
                    <a href="../usuarioOferta" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
                </div>
                <div class="card-body">     
                  <?php if( $message = Session::get('error') ): ?>
                    <div class="alert alert-success">
                      <p><?php echo e($message); ?></p>
                    </div>
                  <?php endif; ?>
                  
                  <form method="POST" action="../usuarioOferta">
                  <?php echo csrf_field(); ?>


                  @error('nombre')
                  <div class="alert alert-danger " >
                    El nombre es requerido
                  </div>
                  @enderror  
                  @error ('descripcion')
                  <div class="alert alert-danger">
                    La descripción es requerida 
                  </div>
                  @enderror

                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                    />
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>